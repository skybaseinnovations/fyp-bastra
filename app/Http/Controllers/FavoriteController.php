<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function index()
    {
//        $info['favorites'] = Favorite::where('user_id', auth()->user()->id)->with('listing')->orderBy('id','desc')->get();
//        $info['route'] = 'listings.';
//        return view('user.favorites.index',$info);
    }
    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $favorite = Favorite::where(['user_id' => $userId, 'product_id' =>  $request->favorite])->first();
        if($favorite)
        {
            $favorite->delete();
        }
        else{
            $fav = new Favorite(['user_id'=>$userId,'product_id'=>$request->favorite]);
            $fav->save();
        }
        $data = [
            'status' => true,
            'product_id' => $request->favorite,
        ];
        return $data;
    }

}
