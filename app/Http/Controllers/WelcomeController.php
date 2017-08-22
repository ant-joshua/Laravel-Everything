<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

//models only
use App\slider;
use App\portfolio;
use App\blog;

class WelcomeController extends Controller
{	

    public function index(){
    	$blogs = blog::orderBy('created_at', 'desc')->paginate(8);
    	$sliders = slider::orderBy('created_at', 'desc')->paginate(4);
    	$portfolios = portfolio::orderBy('created_at', 'desc')->paginate(6);
    	$videoList = Youtube::listChannelVideos('UC9PWIZ20pnEXgT1fT69bX8A', 6, "date");
    	return view('welcome', compact('sliders', 'portfolios', 'blogs', 'videoList'));
    }

}
