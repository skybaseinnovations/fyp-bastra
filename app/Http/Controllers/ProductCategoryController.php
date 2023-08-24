<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductCategoryController extends Controller
{

    public function index(Request $request){
        $data['title']="Product Category";
        $data['action']="productcategory.create";
        $search=$request['search'] ?? "";
        $items=ProductCategory::query();
        if($search!=""){
            $items= ProductCategory::where('name','LIKE',"%".$search."%");
        }
        $items=$items->paginate(6);
        if($search){
            $data['search']=$search;
        }
        $data['items']=$items;
        $data['items']=$items;
        $data['view']='productcategory.show';
        $data['edit']='productcategory.edit';
        $data['delete']='productcategory.delete';
        return view('admin.productcategory.index',$data);
    }
    public function create(){
        
        $data['title']="Create Product Category";
        $data['action']="productcategory.store";
        return view('admin.productcategory.create',$data);
    }
    public function store(Request $request){
        $request->validate(
            [
                'img_url'=>'nullable|file|mimes:png,jpg,jpeg|max:9999',
                'name'=>'required|string',
            ]);
        $item = new ProductCategory();
        if($request->img_url){
            $image_name = strtolower(str_replace(" ","",$request->name)."-".time().".".$request->img_url->extension());
            $request->img_url->move(public_path('uploads'),$image_name);
            $item->img_url = $image_name;
        }
        
        $item->name = $request->name;
        $item->save();
        return redirect()->route('productcategory.index')->with('message','Product Category Created Successfully');
        
    }
    public function edit($id){
        $data['title']="Edit Product Category";
        $data['action']="productcategory.update";
        $data['item']=ProductCategory::find($id);
        return view('admin.productcategory.edit',$data);
    }
    
    public function show($id){
        $data['title']="Show Product Category";
        $data['item']=ProductCategory::find($id);
        $data['show']="readonly";
        return view('admin.productcategory.show',$data);
    }
    public function update(Request $request, $id){
        $ProductCategory=ProductCategory::find($id);
        $ProductCategory->name=$request->name;
        if($request->hasFile('img_url')){
         $destination='uploads/'.$ProductCategory->img_url;
         if(File::exists($destination)){
             File::delete($destination);
         }
         $image_name = strtolower(str_replace(" ","",$request->title)."-".time().".".$request->img_url->extension());
         $request->img_url->move(public_path('uploads'),$image_name);
        $ProductCategory->img_url = $image_name;
        }
        $ProductCategory->update();
        return redirect()->route('productcategory.index')->with('message','ProductCategory Updated Successfully');
    }
    public function destroy($id){
        $ProductCategory=ProductCategory::find($id);
        $destination='uploads/'.$ProductCategory->img_url;
        File::delete($destination);
        $ProductCategory->delete();
        return redirect()->route('productcategory.index')->with('message','ProductCategory Deleted Successfully');
     }
}