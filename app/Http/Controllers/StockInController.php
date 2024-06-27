<?php

namespace App\Http\Controllers;

use App\Models\Stockin;
use Illuminate\Http\Request;
use App\Models\Book;

class StockInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.stockins.index', [
            'stockins' => Stockin::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.stockins.create', [
            'books' => Book::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Stockin::create($request->all());

        return redirect()->route('stockin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stockin $stockin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stockin $stockin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stockin $stockin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stockin $stockin)
    {
        //
    }
}
