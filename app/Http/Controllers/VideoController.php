<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class VideoController extends Controller
{
    public function index(){
    	$videoList = Youtube::listChannelVideos('UC9PWIZ20pnEXgT1fT69bX8A', 50, "date");
    	return view('video.index', compact('videoList'));
    }
}
