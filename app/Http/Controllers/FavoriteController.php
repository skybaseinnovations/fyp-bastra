<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\ProductCategory;
use App\Models\Product;

class FavoriteController extends BaseController
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

    public function favourite(Request $request)
    {


//        $data['product']=Product::with('product')->where('user_id',auth()->user()->id)->get();

        $data=$this->getInfo();
        $user = User::findOrfail(auth()->user()->id);
        $data['products'] = $user->favourites()->paginate(10);

//        dd($data['products']);
        return view('front.favourite', $data);
    }


}
