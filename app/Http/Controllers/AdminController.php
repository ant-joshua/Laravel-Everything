<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Alaouy\Youtube\Facades\Youtube;
use Carbon\Carbon;
use Redirect;
use Auth;
//models only
use App\slider;
use App\portfolio;
use App\blog;
use App\video;
use App\blogbanner;

class AdminController extends Controller
{	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
    	return view('admin.index');
    }

    public function sliderindex(){
        $sliders = slider::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    public function slidercreate(){
        return view('admin.slider.create');
    }

    public function sliderpost(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255|unique:sliders',
            'content'   =>  'required',
            'image' => 'image|required',
        ]);

        $slider = new slider;
        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->user_id = Auth::user()->id;
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path().'/images/slider/', $name);
            $slider->image = $name;
            $thumb = Image::make(public_path().'/images/slider/' . $name)->resize(1920,1080)->save(public_path().'/images/slider/thumb/' . $name, 90);  
            $subthumb = Image::make(public_path().'/images/slider/' . $name)->crop(670, 670, 25, 25)->save(public_path().'/images/slider/subthumb/' . $name, 90); 
        }
        
        $slider->save();
        return Redirect::back()->with('status', 'Post Success');
    }

    public function portfolioindex(){
        return view('admin.portfolio.index');
    }

    public function portfoliocreate(){
        $portfolios = portfolio::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.portfolio.create', compact('portfolios'));
    }

    public function portfoliopost(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|required',
        ]);

        $portfolio = new portfolio;
        $portfolio->title = $request->title;
        $portfolio->published_at = Carbon::now();
        $portfolio->user_id = Auth::user()->id;
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path().'/images/portfolio/', $name);
            $portfolio->image = $name;
            $thumb = Image::make(public_path().'/images/portfolio/' . $name)->resize(480,320)->save(public_path().'/images/portfolio/thumb/' . $name, 90);  
        }
        $portfolio->save();
        return Redirect::back()->with('status', 'Post Success');
    }

    public function blogindex(){
        $blogs = blog::orderBy('created_at', 'desc')->published()->paginate(10);
        return view('admin.blog.index', compact('blogs', 'tags'));
    }

    public function blognotpublish(){
        $blogs = blog::orderBy('created_at', 'desc')->unpublished()->paginate(10);
        return view('admin.blog.notpublish', compact('blogs'));
    }

    public function blogcreate(){
        return view('admin.blog.create');
    }

    public function blogpost(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255|unique:sliders',
            'content' => 'required',
            'image' => 'image|required',
        ]);
        $blog = new blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->slug = str_slug($blog->title, '-');
        $blog->user_id = Auth::user()->id;
        $blog->published_at = $request->published_at;
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path().'/images/blog/', $name);
            $blog->image = $name;
            $thumb = Image::make(public_path().'/images/blog/' . $name)->resize(640,420)->save(public_path().'/images/blog/thumb/' . $name, 90);
        }
        $blog->save();
        $tag = $request->tag;
        $blog->tag($tag);
        return Redirect::back()->with('status', 'Post Success');
    }

    public function blogbanner(){

        $blogbanners = blogbanner::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.blog.banner', compact('blogbanners'));
    }
    
    public function blogbannerpost(Request $request){

         $this->validate($request, [
            'image' => 'image|required',
        ]);

        $blogbanner = new blogbanner;

        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path().'/images/blog/', $name);
            $blogbanner->image = $name;
            $thumb = Image::make(public_path().'/images/blog/' . $name)->resize(1920,1080)->save(public_path().'/images/blog/banner/' . $name, 90);
        }
        $blogbanner->save();
        return Redirect::back()->with('status', 'Post Success');
    }
}
