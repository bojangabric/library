<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;

class CategoriesController extends Controller
{
    public function index($CategoryID)
    {   
        $categoryid = $CategoryID;
        
        if ($CategoryID == 1)
        {   
            $books = Book::paginate(15);
            return view('store', compact('books', 'categoryid'));
        }

        $books = Book::where("CategoryID", $CategoryID)->paginate(15);
        return view('store', compact('books', 'categoryid'));
    }
}
