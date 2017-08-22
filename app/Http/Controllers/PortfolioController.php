<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//model only
use App\portfolio;

class PortfolioController extends Controller
{
    public function index(){

    	$portfolios = portfolio::orderBy('created_at', 'desc')->paginate(20);
    	return view('portfolio.index', compact('portfolios'));
    }
}
