<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $data = $request->all();
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->location = "Pokhara";
        $order->total = $request->total;
        $order->save();
        $order->update(['number' => $order->id]);

        $total = 0;
        foreach ($request->product_ids ?? [] as $key=>$productId)
        {
            $orderItem = new OrderItem([
                'product_id' => $productId,
                'product_title' => $request->product_titles[$key],
                'order_id' => $order->id,
                'total_amount' => $request->subtotals[$key],
                'quantity' => $request->quantities[$key]
            ]);

            $total += $request->subtotals[$key];
            $orderItem->save();
            CartItem::findOrFail($request->cart_ids[$key])->delete();
        }


        return redirect()->route('order-confirm', ['order_id' => $order->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkout(Request $request)
    {
        if ($request->payment_method) {
            $order = Order::findOrFail($request->order_id);
            $order->update([
                'payment_method' => $request->payment_method,
            ]);

            if ($request->payment_method == "skypay") {
                $url = "https://pay.skybase.com.np/payments/initiate";
                $params = [
                    "access_key" => "698049",
                    "amount" => $request->total,
                    "success_url" => route('success.message'),
                    "failure_url" => route('failure.message'),
                    "order_id" => $request->order_id,
                ];
                return redirect()->to($url . '?' . http_build_query($params));
            } else {
                return redirect()->route('success.message', ['order_id' => $order->id]);
            }
        }
        return redirect()->route('failure.message');
    }
}
