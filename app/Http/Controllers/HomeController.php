<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function category()
    {
        return view('front.categories');
    }
}
