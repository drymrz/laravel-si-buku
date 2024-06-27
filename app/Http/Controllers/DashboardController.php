<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $orders = Order::all();
        $orderItems = OrderItem::all();
        $users = User::all();
        $categories = Category::all();
        return view('dashboard.index', compact('orders', 'orderItems', 'books', 'users', 'categories'));
    }
}
