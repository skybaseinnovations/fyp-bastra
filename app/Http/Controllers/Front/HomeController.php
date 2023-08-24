<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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
public function single()
{
    return view('front.single');
}
public function description()
{
    return view('front.description');
}
public function productcard()
{
    return view('front.productcard');
}
}