<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = request()->cookie('cart') ? json_decode(request()->cookie('cart'),true):[];
        if(empty($cart)) return redirect('/');
        $products =[];
        foreach ($cart as $productId => $productAmount){
            $products[] = Product::find($productId);
        }
        return view('orders.cart', compact('products','cart'));
    }

    /**
     * Store a newly created resource in storage.

     */
    public function store()
    {
        $cart = request()->cookie('cart') ? json_decode(request()->cookie('cart'),true):[];
        $order = Order::create(request([
            'customer_name',
            'email',
            'phone',
            'feedback']));

        foreach ($cart as $productId => $productAmount){
            $order->products()->attach($productId,['amount'=> $productAmount]);
        }
        $cookie = \Cookie::forget('cart');
        return redirect('/')->withCookie($cookie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
