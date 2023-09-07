<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\BaseController;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;

// use App\Models\Home;
// use App\Models\Order;
// use App\Models\OrderItem;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends BaseController
{


//    public function test(Request $request)
//    {
//        $selected = json_decode($request->selected);
//        $product_ids = $request->product_ids;
//        $quantities = $request->quantity;
//        $order = new Order();
//        $order->user_id = auth()->user()->id;
//
//        $order->location = "Pokhara";
//        $order->payment_reference_id = auth()->user()->id;
//
//
//        $order->save();
//
//        $order->update(['order_id' => $order->id]);
//
//
//        foreach ($selected as $key => $data) {
//            if ($data == "on") {
//                $orderItems = new OrderItem();
//                $product_id = $product_ids[$key];
//                $quantity = $quantities[$key];
//                $product = Product::find($product_id);
//                $total_amount = $quantity * $product->price;
//                $title = $product->name;
//
//                $orderItems->product_id = $product_id;
//                $orderItems->quantity = $quantity;
//                $orderItems->order_id = $order->id;
//                $orderItems->total_amount = $total_amount;
//                $orderItems->product_title = $title;
//                $orderItems->save();
//            }
//        }
//        return redirect()->back();
//
//
//        //  foreach($formData as $form){
//        //     CartItem::create($form);
//        //  }
//    }


    public function index()
    {
        $data = $this->getInfo();
//        dd($data);

//        dd($data['notifications']);
        return view('front.index', $data);
    }

    public function contact()
    {
        $data = $this->getInfo();

        return view('front.contact', $data);
    }
//    public function showNotificaton()
//    {
//        $notifications = auth()->user()->unreadNotifications;
//        return view('showNotification', compact('notifications'));
//    }

// public function category()
// {
//     $data['items']=$this->productCategoryInfo();
//     return view('front.categories',$data);


// }
    public function categoryItem($id)
    {
        $data = $this->getInfo();
        $data['productCategories'] = $this->productCategoryInfo();
        $data['products'] = Product::where('product_category_id', $id)->get();

        return view('front.categoryItem', $data);
    }

    public function deleteCartItem($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();
        return redirect()->back();
    }

    public function details($id)
    {
        $data = $this->getInfo();

        $data['product'] = Product::find($id);
        return view('front.description', $data);
    }

    public function productshow($id)
    {
        $data = $this->getInfo();
        $data['productcategory'] = ProductCategory::find($id);
        return view('front.productshow', $data);
    }

    public function login()
    {
                $data = $this->getInfo();
        return view('front.login', $data);
    }

    public function register()
    {
                $data = $this->getInfo();
        return view('front.register', $data);
    }

    public function productcartAdd(Request $request, $id)
    {
        $data = $this->getInfo();


        $info = CartItem::where('product_id', $id)->where('user_id', auth()->user()->id)->first();
        if ($info) {
            return redirect()->back()->with('error', 'The product already is added to the cart.');
        }
        $cart = new CartItem();
        $product = Product::find($id);
        $cart->product_id = $id;
        $cart->quantity = $request->quantity;
        $cart->total = $request->quantity * $product->price;
        $cart->user_id = auth()->user()->id;
        $cart->save();

        $data['cart'] = $cart;
        return redirect()->back()->with('message', 'Cart Added Successfully');


    }

    public function cartshow()
    {
        $data = $this->getInfo();

        $data['carts'] = CartItem::with('product')->where('user_id', auth()->user()->id)->get();
        return view('front.productcart', $data);
    }

    public function orderhistory(Request $request)
    {
        $data = $this->getInfo();
        $data['orders'] = auth()->user()->orders()->with('orderItems', 'orderItems.product')->get();
        return view('front.orderhistory', $data);
    }

    public function orderConfirm(Request $request)
    {
        $data = $this->getInfo();
        $data['order'] = Order::with('orderItems')->findOrFail($request->order_id);
        return view('orderConfirmation', $data);
    }

    function getSuccess(Request $request)
    {
        $order = Order::with('orderItems')->findOrFail($request->order_id);

        $order->update([
            'payment_reference_id' => $request->ref ?? null,
            'payment_status' => $request->message ? 'Completed' : 'Pending'
        ]);
        return view('success', compact('order'));
    }
    function getFailure(Request $request)
    {
        $order = Order::with('orderItems')->findOrFail($request->order_id);

        $order->update([
            'payment_status' => 'Failed',
            'order_status' => 'Failed'
        ]);
        return view('failure', compact('order'));
    }


    public function markNotification(Request $request)
    {
        $user = User::findOrfail(auth()->user()->id);
        $s = $user->unreadNotifications()->update(['read_at' => now()]);


//        dd(auth()->user()->notifications()->count());
//        auth()->user()
//            ->unreadNotifications()->get()->each(function(\
//            ->when($request->input('id'), function ($query) use ($request) {
//                return $query->where('id', $request->input('id'));
//            })
//            ->markAsRead();
        return response()->noContent();
    }

    public function cancelProduct($id)
    {
        $order = Order::find($id);
        $order->order_status = 'Cancelled';
        $order->update();
        return redirect()->back()->with('message', 'Product Cancelled Successfully');

    }


}

