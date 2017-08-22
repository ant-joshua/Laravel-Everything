<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Carbon\Carbon;
//Models only
use App\forum;
use App\forumcomment as comment;

class ForumController extends Controller
{
    public function index(){
    	$forums = forum::orderBy('created_at', 'desc')->paginate(10);
    	$tags = forum::allTags();
    	return view('forum.index', compact('forums', 'tags'));
    }

    public function create(){
        $forums = forum::orderBy('created_at', 'desc')->paginate(10);
        $tags = forum::allTags();
    	return view('forum.create', compact('tags', 'forums'));
    }

    public function post(Request $request){
    	$this->validate($request, [
            'title' => 'required|max:255|unique:forums',
            'content'   =>  'required',
            'tag'	=>	'required',
        ]);

    	$forum = new forum;
    	$forum->title = $request->title;
        $forum->content = $request->content;
        $forum->slug = str_slug($forum->title, '-');
        $forum->user_id = Auth::user()->id;
       	$forum->published_at = Carbon::now();
        $forum->save();
        $tags = $request->tag;
        $forum->tag($tags);
        return Redirect::back()->with('status', 'Post Success');
    }

    public function show($forum){
    	$forum = forum::where('slug', $forum)->firstorfail();
    	return view('forum.show', compact('forum'));
    }

    public function commentpost($comment, Request $request){
        $this->validate($request, [
            'comment' => 'required|max:255',
        ]);

        $forum = forum::where('slug', $comment)->firstorfail();
        $forumid = $forum->id;
        $comment = new comment;
        $comment->comment = $request->comment;
        $comment->forum_id = $forumid;
        $comment->user_id = Auth::user()->id;
        $comment->published_at = Carbon::now();
        $comment->save();
        
        return Redirect::back()->with('status', 'Comment Success');
    }

    public function categorypost(Request $request){

        $this->validate($request, [
            'tag'   =>  'required',
        ]);
        
        $tags = $request->tag;
        $forum->tag($tags);
        return Redirect::back()->with('status', 'Category Add Success');
    }
}
