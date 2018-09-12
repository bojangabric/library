<?php

$keyword = (isset($_GET['keyword']) && !empty($_GET['keyword'])) ? $_GET['keyword'] : '';

if ($categoryid == 1) {
    if (isset($_GET['sort']) && !empty($_GET['sort'])) {
        if ($_GET['sort'] == 'price-asc') {
            $books = App\Book::orderBy('Price', 'asc')->paginate(15);
        } elseif ($_GET['sort'] == 'price-desc') {
            $books = App\Book::orderBy('Price', 'desc')->paginate(15);
        } elseif ($_GET['sort'] == 'highest-rating') {
            $books = App\Book::orderBy('StarRating', 'desc')->paginate(15);
        } elseif ($_GET['sort'] == 'most-reviews') {
            $books = App\Book::select(DB::raw('books.*, count(*) as `total`'))
                ->leftJoin('reviews', 'books.BookID', '=', 'reviews.BookID')
                ->groupBy('books.BookID')
                ->orderBy('total', 'DESC')
                ->paginate(15);
        }
    } else {
        $books = App\Book::where('Name', 'like', '%' . $keyword . '%')->paginate(15);
    }
} else {
    if (isset($_GET['sort']) && !empty($_GET['sort'])) {
        if ($_GET['sort'] == 'price-asc') {
            $books = App\Book::where('CategoryID', '=', $categoryid)->orderBy('Price', 'asc')->paginate(15);
        } elseif ($_GET['sort'] == 'price-desc') {
            $books = App\Book::where('CategoryID', '=', $categoryid)->orderBy('Price', 'desc')->paginate(15);
        } elseif ($_GET['sort'] == 'highest-rating') {
            $books = App\Book::where('CategoryID', '=', $categoryid)->orderBy('StarRating', 'desc')->paginate(15);
        } elseif ($_GET['sort'] == 'most-reviews') {
            $books = App\Book::select(DB::raw('books.*, count(*) as `total`'))->where('CategoryID', '=', $categoryid)
                ->leftJoin('reviews', 'books.BookID', '=', 'reviews.BookID')
                ->groupBy('books.BookID')
                ->orderBy('total', 'DESC')
                ->paginate(15);
        }
    }
}

if (isset($_GET['gridview']) && $_GET['gridview'] == 'list-view') {
    foreach ($books as $book) {
        echo '<div class="col-lg-9 mb-4">';
        echo '<div class="card" >';
        echo '<div class="row">';
        echo '<div class="col-md-4">';
        echo '<a href="/store/book/' . $book->BookID . '"><img class="card-img-top thumbnail-list-pic" src="/images/' .
        $book->Image . '" alt=""></a>';
        echo '</div>';
        echo '<div class="col-lg-8">';
        echo '<div>';
        echo '<h4 class="card-title mt-4">';
        echo '<a href="/store/book/' . $book->BookID . '">' . $book->Name . '</a>';
        echo '</h4>';
        $author = App\Author::where("AuthorID", "=", $book->AuthorID)->first();
        echo '<p>' . $author->Name . ' ' . $author->Surname . '</p>';
        echo '<p class="card-text list-book-text">' . substr($book->BookDescription, 0, 90) . '...' . '</p>';
        echo '</div>';
        echo '<div class="mt-4 text-warning">';
        echo '$' . $book->Price . '<span class="card-rating">' . str_repeat('&nbsp;', 3) . $book->getRating() . '</span>';
        if (Auth::user() && DB::table('shopping_carts')->where('user_id', Auth::user()->id)->where('BookID', $book->BookID)->exists()) {
            echo '<div class="btn-group ml-5"><button class="btn btn-primary disabled">In cart</button></div>';
        } else {
            if (DB::table('books')->where('BookID', $book->BookID)->where('Quantity', '>', 0)->exists())
                echo '<div class="btn-group ml-2"><button class="btn btn-primary buy-button">Buy</button><button class="btn btn-primary btn-cart">Add to cart</button></div>';
            else
                echo '<div class="btn-group ml-5"><button class="btn btn-primary disabled">Sold out</button></div>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    foreach ($books as $book) {
        echo '<div class="col-lg-4 col-md-6 col-xl-4 mb-4">';
        echo '<div class="card h-100 mr-5">';
        echo '<a href="/store/book/' . $book->BookID . '"><img class="card-img-top thumbnail-gallery-pic" src="/images/' .
        $book->Image . '" alt=""></a>';
        echo '<div class="card-body">';
        echo '<h4 class="card-title">';
        echo '<a href="/store/book/' . $book->BookID . '">' . $book->Name . '</a>';
        echo '</h4>';
        echo '</div>';
        echo '<div class="card-body d-flex flex-column justify-content-end">';
        $author = App\Author::where("AuthorID", "=", $book->AuthorID)->first();
        echo '<h4 class="card-author">' . $author->Name . ' ' . $author->Surname . '</h4>';
        echo '<h5 class="card-rating">' . $book->getRating() . '</h5>';
        echo '</div>';
        echo '<div class="card-footer">';
        echo '<small class="text-warning">$' . $book->Price . '</small>';
        echo '<div class="btn-group float-right">';
        if (Auth::user() && DB::table('shopping_carts')->where('user_id', Auth::user()->id)->where('BookID', $book->BookID)->exists()) {
            echo '<div class="btn-group"><button class="btn btn-primary disabled">In cart</button></div>';
        } else {
            if (DB::table('books')->where('BookID', $book->BookID)->where('Quantity', '>', 0)->exists()) {
                echo '<button type="button" class="btn btn-primary">Buy</button>';
                echo '<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo '<span class="sr-only">Toggle Dropdown</span>';
                echo '</button>';
                echo '<div class="dropdown-menu dropdown-btn-cart">';
                echo '<button class="dropdown-item btn-cart">Add to cart</button>';
                echo '</div>';
            }
            else {
                echo '<div class="btn-group"><button class="btn btn-primary disabled">Sold out</button></div>';
            }
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

echo '<div class="col-lg-9 mb-4">';
echo '<div class="pagination">';
echo $books->appends(request()->except('page'))->links();
echo '</div>';
echo '</div>';

