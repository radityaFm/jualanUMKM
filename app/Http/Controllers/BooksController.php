<?php

namespace App\Http\Controllers;

use App\Models\Books; 
use Illuminate\Http\Request;

class BooksController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $books = Books::all(); // Retrieve all books from the database
        return view('admin/books', compact('books')); // Return the view with the books data
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('admin/create'); // Return the view to create a new book
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'published_year' => 'required|integer',
            'isbn' => 'required|unique:books',
            'pages' => 'required|integer',
            'status' => 'required',
        ]);

        Books::create($request->all()); // Create a new book record
        return redirect()->route('books')->with('success', 'Book created successfully.'); // Redirect with success message
    }

    // Show the form for editing the specified resource
    public function edit(Books $book)
    {
        return view('admin/edit', compact('book')); // Return the view to edit the specified book
    }

    // Update the specified resource in storage
    public function update(Request $request, Books $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'published_year' => 'required|integer',
            'isbn' => 'required|unique:books,isbn,' . $book->id,
            'pages' => 'required|integer',
            'status' => 'required',
        ]);

        $book->update($request->all()); // Update the specified book record
        return redirect()->route('books')->with('success', 'Book updated successfully.'); // Redirect with success message
    }

    // Remove the specified resource from storage
    public function destroy(Books $book)
    {
        $book->delete(); // Delete the specified book record
        return redirect()->route('books')->with('success', 'Book deleted successfully.'); // Redirect with success message
    }
}
