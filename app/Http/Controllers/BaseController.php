<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Notification;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    protected $cartCount = 0;
    protected $notificationCount = 0;
    protected $items = "";


    public function productCategoryInfo()
    {
        $productCategoryNav = ProductCategory::with('products')->get();
        return $productCategoryNav;
    }

    public function cartCount()
    {
        $count = 0;
        if (auth()->user()){
            $count = CartItem::where('user_id', auth()->user()->id)->count();
        }
        return $count;
    }
    public function notificationCount()
    {
        $count = 0;
        if (auth()->user()){
//            unreadNotification()
            $count = auth()->user()->unreadNotifications()->count();
        }
        return $count;
    }

    public function getInfo()
    {
        $data['cartCount'] = $this->cartCount();
        $data['items'] = $this->productCategoryInfo();
        $data['notificationCount'] = $this->notificationCount();
        if(auth()->user()){
//            $data['notifications'] = auth()->user()->unreadNotifications()->get();
            $data['notifications'] = auth()->user()->notifications;
        }
        return $data;
    }

}
