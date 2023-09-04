<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function productCategoryInfo()
    {
        $productCategoryNav = ProductCategory::with('products')->get();
        return $productCategoryNav;
    }

    public function cartCount()
    {
        $count = CartItem::where('user_id', auth()->user()->id)->count();
        return $count;
    }
}
