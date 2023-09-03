<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\BaseController;
use App\Models\CartItem;
use App\Models\Home;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
<<<<<<< HEAD
=======

public function test(Request $request){
    $selected = json_decode($request->selected);
    $product_ids = $request->product_ids;
    $quantities= $request->quantity;
    $order = new Order();
    $order->user_id = auth()->user()->id;

    $order->location = auth()->user()->location;
    $order->payment_reference_id = auth()->user()->id;

    
    $order->save();

    $order->update(['order_id' => $order->id]);



    foreach($selected as $key=>$data){
        if($data == "on"){
            $orderItems = new OrderItem();
            $product_id = $product_ids[$key];
            $quantity = $quantities[$key];
            $product = Product::find($product_id);
            $total_amount = $quantity * $product->price;
            $title=$product->name;

            $orderItems->product_id = $product_id;
            $orderItems->quantity = $quantity;
            $orderItems->order_id = $order->id;
            $orderItems->total_amount = $total_amount;
            $orderItems->product_title = $title;
            $orderItems->save();
        }
    }
    return redirect()->back();
    

    //  foreach($formData as $form){
    //     CartItem::create($form);
    //  }
}
    

>>>>>>> af6da711ee882a5669799b8c2a94b6d3d84e80c2
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

public function deleteCartItem($id){
    $cartItem = CartItem::findOrFail($id);
    $cartItem->delete();
    return redirect()->back();
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
    $data = CartItem::where('product_id',$id)->where('user_id', auth()->user()->id)->first();
    if($data){
        return redirect()->back()->with('error', 'The product already is added to the cart.');
    }
    $cart = new CartItem();
    $product = Product::find($id);
    $cart->product_id = $id;
    $cart->quantity = $request->quantity;
    $cart->total = $request->quantity*$product->price;
    $cart->user_id= auth()->user()->id;
    $cart->save();
   
    $data['cart']=$cart;
    return redirect()->back()->with('message', 'Cart Added Successfully');

}
public function cartshow()
{
    $data['items']=$this->productCategoryInfo();
    $data['carts']=CartItem::with('product')->where('user_id',auth()->user()->id)->get();
    $data['count']=count($data['carts']);
    return view('front.productcart',$data);
}

public function orderhistory()
{
    $data['items']=$this->productCategoryInfo();
    return view('front.orderhistory',$data);
}
}