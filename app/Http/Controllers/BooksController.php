<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index()
    {
        return view('store');
    }

    public function show(Book $book)
    {
        return view('book', compact('book'));
    }
}
