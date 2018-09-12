<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Review;
use Auth;

class ReviewsController extends Controller
{
    public function store(Book $book)
    {
        Review::create([
            'Review' => request('review'),
            'user_id' => Auth::id(),
            'BookID' => $book->BookID
        ]);

        return back();
    }
}
