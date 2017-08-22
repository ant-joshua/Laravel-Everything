<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use Carbon\Carbon;
//Models Only
use App\blog;
use App\blogbanner;
use App\blogcomment as comment;

class blogController extends Controller
{
    public function index(){
    	$blogbanners = blogbanner::orderBy('created_at', 'desc')->paginate(1);
    	$blogs = blog::orderBy('created_at', 'desc')->published()->paginate(10);
    	$tags = blog::allTags();
    	return view('blog.index', compact('blogs', 'tags', 'blogbanners'));
    }

    public function show($blog){
        $lastposts = blog::inRandomOrder()->paginate(4);
    	$blog = blog::where('slug', $blog)->firstorfail();
        $tags = blog::allTags();
    	return view('blog.show', compact('blog', 'lastposts', 'tags'));
    }

    public function commentpost($blog,Request $request){
        $blog = blog::where('slug', $blog)->firstorfail();
        $user_id = Auth::user()->id;
        $comment = new comment;
        $comment->blog_id = $blog->id;
        $comment->user_id = $user_id;
        $comment->comment = $request->comment;
        $comment->published_at = Carbon::now();
        $comment->save();
        return Redirect::back()->with('status', 'Comment Success');
    }
}
