<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function productCategoryInfo()
    {
        $productCategoryNav = ProductCategory::with('products')->get();
        return $productCategoryNav;
    }
}