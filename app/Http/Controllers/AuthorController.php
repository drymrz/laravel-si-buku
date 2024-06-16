<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.authors.index', [
            'authors' => Author::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $request['slug'] = Str::slug($request->name) . '-' . Str::random(5);
        $validatedData = $request->validate([
            'slug' => 'required|unique:authors',
            'name' => 'required|max:70',
            'bio' => 'required',
        ]);
        Author::create($validatedData);
        return redirect('/dashboard/authors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('dashboard.authors.edit', [
            'author' => $author
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $request['slug'] = Str::slug($request->name) . '-' . Str::random(5);
        $validatedData = $request->validate([
            'slug' => 'required|unique:authors',
            'name' => 'required|max:70',
            'bio' => 'required',
        ]);

        Author::where('id', $author->id)->update($validatedData);
        return redirect('/dashboard/authors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        Author::destroy($author->id);
        return back();
    }
}
