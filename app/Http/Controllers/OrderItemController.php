<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\Models\OrderItem;
use App\Models\Book;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    
    public function index()
    {
        $orderItems = OrderItem::all();
        $orderId = null; 

        return view('dashboard.order_items.index', compact('orderItems', 'orderId'));
    }

   
    public function create()
    {
        $books = Book::all(); 
        return view('dashboard.order_items.create', compact('books'));
    }

    
    public function store(StoreOrderItemRequest $request)
    {
        OrderItem::create($request->validated());

        return redirect()->route('order_items.index')
                         ->with('success', 'Order item created successfully.');
    }

    
    public function show(OrderItem $orderItem)
    {
        return view('dashboard.order_items.show', compact('orderItem'));
    }

 
    public function edit(OrderItem $orderItem)
    {
        return view('dashboard.order_items.edit', compact('orderItem'));
    }

   
    public function update(UpdateOrderItemRequest $request, OrderItem $orderItem)
    {
        $orderItem->update($request->validated());

        return redirect()->route('order_items.index')
                         ->with('success', 'Order item updated successfully.');
    }

  
    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();

        return redirect()->route('order_items.index')
                         ->with('success', 'Order item deleted successfully.');
    }
}
