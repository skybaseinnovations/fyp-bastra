<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

public function index()
{
    $data['items']=ProductCategory::with('products')->get();
    return view('front.index', $data);
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
}