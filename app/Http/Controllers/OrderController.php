<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\User;

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

        return view('dashboard.orders.create', compact('users'));
    }


    public function store(StoreOrderRequest $request)
    {
        
    }

    
    public function show(Order $order)
    {
        
    }

    
    public function edit(Order $order)
    {
        return view('dashboard.orders.edit', compact('order'));
    }

   
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    
    public function destroy(Order $order)
    {
        //
    }
}

