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
    $data['items']=ProductCategory::with('products')->get();
    return view('front.contact',$data);
}
public function category()
{
    $data['items']=ProductCategory::with('products')->get();
    return view('front.categories',$data);
}
public function single()
{
    $data['items']=ProductCategory::with('products')->get();
    return view('front.single',$data);
}
public function description()
{
    $data['items']=ProductCategory::with('products')->get();
    return view('front.description',$data);
}
public function productcart()
{
    $data['items']=ProductCategory::with('products')->get();
    return view('front.productcart',$data);
}
public function productshow($id)
{
    $data['items']=ProductCategory::get();
    $data['productcategory']=ProductCategory::find($id);
    return view('front.productshow',$data);
}
public function login()
{
    $data['items']=ProductCategory::with('products')->get();
    return view('front.login',$data);
}
public function register()
{
    $data['items']=ProductCategory::with('products')->get();
    return view('front.register',$data);
}
}