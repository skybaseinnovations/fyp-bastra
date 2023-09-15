<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index(Request $request){
        $data['title']="Order Item";
        $data['action']="orderitem.create";
        $search=$request['search'] ?? "";
        $items=OrderItem::query();
        if($search!=""){
            $items= OrderItem::where('quantity','LIKE',"%".$search."%");
        }
        $items=$items->paginate(6);
        

        if($search){
            $data['search']=$search;
        }
        $data['items']=$items;
        $data['view']='orderitem.show';
        $data['edit']='orderitem.edit';
        $data['delete']='orderitem.delete';
        return view('admin.orderitem.index',$data);
    }
    public function create(){
        $data['title']="Create Order Item";
        $data['action']="orderitem.store";
        return view('admin.orderitem.create',$data);
    }
    public function store(Request $request){
        $item = new OrderItem();
        $item->product_id = $request->product_id;
        $item->order_id = $request->order_id;
        $item->total_amount = $request->total_amount;
        $item->quantity = $request->quantity;
        $item->save();
        return redirect()->route('orderitem.index')->with('message','Order Item Created Successfully');
        
    }

    public function show($id){
        $data['title']="Show Order Item";
        $data['item']=OrderItem::find($id);
        $data['show']="readonly";
        return view('admin.orderitem.show',$data);
    }
    public function edit($id){
        $data['title']="Edit Order Item";
        $data['action']="orderitem.update";
        $data['item']=OrderItem::find($id);
        return view('admin.orderitem.edit',$data);
    }

    public function update(Request $request, $id){
        $orderItem=OrderItem::find($id);
        $orderItem->product_id=$request->product_id;
        $orderItem->order_id=$request->order_id;
        $orderItem->total_amount=$request->total_amount;
        $orderItem->quantity=$request->quantity;
        $orderItem->update();
        return redirect()->route('orderitem.index')->with('message','Product Updated Successfully');
    }
    public function destroy($id){
        $orderItem=OrderItem::find($id);
        $orderItem->delete();
        return redirect()->route('orderitem.index')->with('message','Order Item Deleted Successfully');
     }
}
