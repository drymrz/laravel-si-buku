<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\Models\OrderItem;
use App\Models\Book;
use App\Models\Order; 
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderItems = OrderItem::all();
        $orderId = null;  

        return view('dashboard.order_items.index', compact('orderItems', 'orderId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all();  
    
        return view('dashboard.order_items.create', compact('books'));
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(OrderItem $orderItem)
    {
        return view('dashboard.order_items.show', compact('orderItem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderItem $orderItem)
    {
        return view('dashboard.order_items.edit', compact('orderItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderItemRequest $request, OrderItem $orderItem)
    {
        $orderItem->update($request->validated());

        return redirect()->route('order_items.index')
                         ->with('success', 'Order item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();

        return redirect()->route('order_items.index')
                         ->with('success', 'Order item deleted successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderItemRequest $request)
    {
        $validatedData = $request->validated();

        
        $order_id = $validatedData['order_id'] ?? null;

        
        if (!$order_id) {
            $order = Order::latest()->first();
            $order_id = $order->id;
        }

        OrderItem::create([
            'order_id' => $order_id,
            'book_id' => $validatedData['book_id'],
            'quantity' => $validatedData['quantity'],
            'price' => $validatedData['price'],  
        ]);

        return redirect()->route('order_items.index')
                        ->with('success', 'Order item created successfully.');
    }
}
