<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('public-views.welcome');
    }

    public function about()
    {
    	return view('public-views.about');
    }

    public function events()
    {
    	return view('public-views.events');
    }

    public function team()
    {
    	return view('public-views.team');
    }

    public function contact()
    {
    	return view('public-views.contact');
    }
}
