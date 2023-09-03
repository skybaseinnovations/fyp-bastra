<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){
        $data['title']="Order";
        $data['action']="order.create";
        $search=$request['search'] ?? "";
        $items=Order::query();
        if($search!=""){
            $items= Order::where('location','LIKE',"%".$search."%");
        }
        $items=$items->paginate(6);
        

        if($search){
            $data['search']=$search;
        }
        $data['items']=$items;
        $data['view']='order.show';
        $data['edit']='order.edit';
        $data['delete']='order.delete';
        $data['hideCreate']=true;
        return view('admin.order.index',$data);
    }
    public function show($id){
        $data['title']="Show Order";
        $data['item']=Order::with('orderItems')->find($id);
        $data['show']="readonly";
        return view('admin.order.show',$data);
    }

    public function edit($id){
        $data['title']="Edit Order";
        $data['action']="order.update";
        $data['item']=Order::find($id);
        return view('admin.order.edit',$data);
    }

    public function update(Request $request, $id){
        $order=Order::find($id);
        $order->number=$request->number;
        $order->user_id=$request->user_id;
        $order->location=$request->location;
        $order->payment_reference_id=$request->payment_reference_id;
        $order->payment_status=$request->payment_status;
        $order->order_status=$request->order_status;
        
        $order->update();
        return redirect()->route('order.index')->with('message','Order Updated Successfully');
    }
   
}