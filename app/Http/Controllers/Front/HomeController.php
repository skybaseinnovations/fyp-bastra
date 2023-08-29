<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\BaseController;
use App\Models\CartItem;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends BaseController
{


    

public function index()
{
    $data['items']=$this->productCategoryInfo();
    return view('front.index', $data);
}
public function contact()
{
    $data['items']=$this->productCategoryInfo();
    return view('front.contact',$data);
}
// public function category()
// {
//     $data['items']=$this->productCategoryInfo();
//     return view('front.categories',$data);
    
    
// }
public function categoryItem($id)
{
    $data['productCategories']=$this->productCategoryInfo();
    $data['products']=Product::where('product_category_id',$id)->get();
    $data['items']=$this->productCategoryInfo();

    return view('front.categoryItem',$data);
}
public function details($id)
{
    $data['items']=$this->productCategoryInfo();
    $data['product']=Product::find($id);
    return view('front.description',$data);
}

public function productshow($id)
{
    $data['items']=$this->productCategoryInfo();
    $data['productcategory']=ProductCategory::find($id);
    return view('front.productshow',$data);
}
public function login()
{
    $data['items']=$this->productCategoryInfo();
    return view('front.login',$data);
}
public function register()
{
    $data['items']=$this->productCategoryInfo();
    return view('front.register',$data);
}
public function productcartAdd(Request $request,$id)
{
    $data['items']=$this->productCategoryInfo();

    $cart = new CartItem();
    $product = Product::find($id);
    $cart->product_id = $id;
    $cart->quantity = $request->quantity;
    $cart->total = $request->quantity*$product->price;
    $cart->user_id= auth()->user()->id;
    $cart->save();
   
    $data['cart']=$cart;
    // return view('front.productcart',$data);

    return redirect()->back()->with('message', 'Cart Added Successfully');

}
public function cartshow()
{
    $data['items']=$this->productCategoryInfo();
    $data['carts']=CartItem::with('product')->where('user_id',auth()->user()->id)->get();
    return view('front.productcart',$data);
}

}