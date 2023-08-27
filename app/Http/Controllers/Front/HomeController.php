<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\ProductCategory;
use App\Models\Product;
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
public function description($id)
{
    $data['item']=Product::find($id);
    return view('front.description',$data);
}
public function productcart()
{
    return view('front.productcart');
}
public function productcartAdd(Request $request,$id)
{
    $item = new CartItem();
    $item = new CartItem();
    $product = Product::find($id);
    $item->product_id = $id;
    $item->quantity = $request->quantity;
    $item->total = $request->quantity*$product->price;
    $item->user_id= auth()->user()->id;
    dd($item);
    $item->save();
   
    return view('front.productcart');
}
}