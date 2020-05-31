<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function blog()
    {

        return view('pages.blog');
    }
    public function watchus()
    {

        return view('pages.watchus');
    }
    public function events()
    {

        return view('pages.events');
    }
    public function contact()
    {

        return view('pages.contact');
    }
   
}
