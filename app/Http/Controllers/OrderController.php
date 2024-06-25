<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        
        $orders = Order::all();
        
        
        return view('dashboard.orders.index', compact('orders'));
    }

   
    public function create()
    {
        $users = User::all(); 
        $users = User::all(); 

        $users = User::all();

        return view('dashboard.orders.create', compact('users'));
    }


    public function store(StoreOrderRequest $request)
    {
     
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->total_price = $request->total_price;
        $order->status = $request->status;

       
        $order->save();


        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    
    public function show(Order $order)
    {
        return view('dashboard.orders.show', compact('order'));

    }

    
    public function edit(Order $order)
    {
        return view('dashboard.orders.edit', compact('order'));
    }

   
    public function update(UpdateOrderRequest $request, Order $order)
    {
        
        $order->user_id = $request->user_id;
        $order->total_price = $request->total_price;
        $order->status = $request->status;
        $order->save();

      
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    
    public function destroy(Order $order)
    {
   
        $order->delete();
 
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }

}

