<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class ContactController extends Controller
{
    public function index(){
    	return view('contact.index');
    }

    public function post(Request $request){
    	 $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
    	 
    	return Redirect::back()->with('status', 'Post Success');
    }
}
