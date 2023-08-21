<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $data['title']="Product";
        $data['action']="product.create";
        $search=$request['search'] ?? "";
        $items=new Product();
        if($search!=""){
            $items= Product::where('name','LIKE',"%".$search."%");
        }
        $items=$items->get();
        

        if($search){
            $data['search']=$search;
        }
        $data['items']=$items;
        return view('admin.product.index',$data);
    }
    public function create(){
        
        $data['title']="Create Product";
        $data['action']="product.create.store";
        return view('admin.product.create',$data);
    }
    public function store(Request $request){
        $request->validate(
            [
                'img_url'=>'required|file|mimes:png,jpg,jpeg|max:9999',
                'name'=>'required|string',
                'price'=>'required',
                'description'=>'required|string',
                'rate_count'=>'required',
            ]);
        $item = new Product();
        $image_name = strtolower(str_replace(" ","",$request->name)."-".time().".".$request->img_url->extension());
        $request->img_url->move(public_path('uploads'),$image_name);
        $item->img_url = $image_name;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->rate_count = $request->rate_count;
        $item->product_category_id = 2;
        $item->save();
        return redirect()->route('product.index')->with('message','Product Created Successfully');
        
    }
    public function edit($id){
        $data['title']="Edit Product";
        $data['action']="product.edit.update";
        $data['item']=Product::find($id);
        return view('admin.product.edit',$data);
    }
    public function show(){
        $data['title']="Index Page of Product";
        $data['products']=Product::get();
        return view('admin.product.show',$data);
    }
    public function update(Request $request, $id){
        $product=Product::find($id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->rate_count=$request->rate_count;
        if($request->hasFile('img_url')){
         $destination='uploads/'.$product->img_url;
         if(File::exists($destination)){
             File::delete($destination);
         }
         $image_name = strtolower(str_replace(" ","",$request->title)."-".time().".".$request->img_url->extension());
         $request->img_url->move(public_path('uploads'),$image_name);
        $product->img_url = $image_name;
        }
        $product->update();
        return redirect()->route('product.index')->with('message','Product Updated Successfully');
    }
    public function destroy($id){
        $product=Product::find($id);
        $destination='uploads/'.$product->img_url;
        File::delete($destination);
        $product->delete();
        return redirect()->route('product.index')->with('message','Product Deleted Successfully');
     }
}