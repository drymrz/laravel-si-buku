<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\Models\OrderItem;
use App\Models\Book;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderItems = OrderItem::all();
        $orderId = null; // Set to null if you don't have a specific order ID context here

        return view('dashboard.order_items.index', compact('orderItems', 'orderId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all(); // Ambil semua buku
        return view('dashboard.order_items.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderItemRequest $request)
    {
        OrderItem::create($request->validated());

        return redirect()->route('order_items.index')
                         ->with('success', 'Order item created successfully.');
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
}
