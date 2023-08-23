<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $data['title']="Product";
        $data['action']="product.create";
        $search=$request['search'] ?? "";
        $items=Product::query();
        if($search!=""){
            $items= Product::where('name','LIKE',"%".$search."%");
        }
        $items=$items->paginate(6);
        

        if($search){
            $data['search']=$search;
        }
        $data['items']=$items;
        $data['view']='product.show';
        $data['edit']='product.edit';
        $data['delete']='product.delete';
        return view('admin.product.index',$data);
    }
    public function create(){
        
        $data['title']="Create Product";
        $data['action']="product.store";
        $data['productCategories']= ProductCategory::all();
        return view('admin.product.create',$data);
    }
    public function store(Request $request){
        $request->validate(
            [
                'img_url'=>'nullable|file|mimes:png,jpg,jpeg|max:9999',
                'name'=>'required|string',
                'price'=>'required',
                'description'=>'required|string',
                'rate_count'=>'required',
            ]);
        $item = new Product();
        if($request->img_url){
            $image_name = strtolower(str_replace(" ","",$request->name)."-".time().".".$request->img_url->extension());
            $request->img_url->move(public_path('uploads'),$image_name);
            $item->img_url = $image_name;
        }
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->rate_count = $request->rate_count;
        $item->product_category_id = $request->product_category_id;
       
        $item->save();
        return redirect()->route('product.index')->with('message','Product Created Successfully');
        
    }

    public function show($id){
        $data['title']="Show Product";
        $data['item']=Product::find($id);
        $data['show']="readonly";
        $data['productCategories']= ProductCategory::all();
        return view('admin.product.show',$data);
    }
    public function edit($id){
        $data['title']="Edit Product";
        $data['action']="product.update";
        $data['item']=Product::find($id);
        $data['productCategories']= ProductCategory::all();
        return view('admin.product.edit',$data);
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