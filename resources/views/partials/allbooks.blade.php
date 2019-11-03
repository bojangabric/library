<?php

$keyword = (isset($_GET['keyword']) && !empty($_GET['keyword'])) ? $_GET['keyword'] : '';

if ($categoryid == 1) {
  if (isset($_GET['sort']) && !empty($_GET['sort'])) {
    if ($_GET['sort'] == 'price-asc') {
      $books = App\Book::orderBy('Price', 'asc')->paginate(16);
    } elseif ($_GET['sort'] == 'price-desc') {
      $books = App\Book::orderBy('Price', 'desc')->paginate(16);
    } elseif ($_GET['sort'] == 'highest-rating') {
      $books = App\Book::orderBy('StarRating', 'desc')->paginate(16);
    } elseif ($_GET['sort'] == 'most-reviews') {
      $books = App\Book::select(DB::raw('books.*, count(*) as `total`'))
        ->leftJoin('reviews', 'books.BookID', '=', 'reviews.BookID')
        ->groupBy('books.BookID')
        ->orderBy('total', 'DESC')
        ->paginate(16);
    }
  } else {
    $books = App\Book::where('Name', 'like', '%' . $keyword . '%')->paginate(16);
  }
} else {
  if (isset($_GET['sort']) && !empty($_GET['sort'])) {
    if ($_GET['sort'] == 'price-asc') {
      $books = App\Book::where('CategoryID', '=', $categoryid)->orderBy('Price', 'asc')->paginate(16);
    } elseif ($_GET['sort'] == 'price-desc') {
      $books = App\Book::where('CategoryID', '=', $categoryid)->orderBy('Price', 'desc')->paginate(16);
    } elseif ($_GET['sort'] == 'highest-rating') {
      $books = App\Book::where('CategoryID', '=', $categoryid)->orderBy('StarRating', 'desc')->paginate(16);
    } elseif ($_GET['sort'] == 'most-reviews') {
      $books = App\Book::select(DB::raw('books.*, count(*) as `total`'))->where('CategoryID', '=', $categoryid)
        ->leftJoin('reviews', 'books.BookID', '=', 'reviews.BookID')
        ->groupBy('books.BookID')
        ->orderBy('total', 'DESC')
        ->paginate(16);
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
    $author = App\Author::where("AuthorID", "=", $book->AuthorID)->first();
    ?>
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4 justify-center flex">
      <div class="card relative overflow-hidden">
        <div class="image">
          <img src="{{'/images/' . $book->Image}}" />
        </div>
        <div class="details absolute text-white text-center">
          <div class="text-lg font-semibold px-2 mt-6">
            <a href="{{'/store/book/' . $book->BookID}}">{{$book->Name}}</a>
          </div>
          <div class="text-gray-400">{{$author->Name . ' ' . $author->Surname}}</div>
          <div class="text-2xl text-yellow-500 mt-6"><?php echo $book->getRating(); ?></div>
          <div class="text-2xl">${{$book->Price}}</div>
          <div class="absolute bottom-0 left-0 right-0">
            <a href="{{'/store/book/' . $book->BookID}}">
              <div class="bg-blue-500 text-white font-semibold text-center px-5 py-2">Read more</div>
            </a>
            @if (DB::table('books')->where('BookID', $book->BookID)->where('Quantity', '>', 0)->exists())
            <div class="bg-green-500 text-white font-semibold text-center px-5 py-2 cursor-pointer btn-cart" data-bookid="{{$book->BookID}}">Buy</div>
            @else
            <div class="bg-green-500 text-white font-semibold text-center px-5 py-2 cursor-pointer opacity-50">Sold out</div>
            @endif
          </div>
          <!-- if (Auth::user() && DB::table('shopping_carts')->where('user_id', Auth::user()->id)->where('BookID', $book->BookID)->exists()) {
            echo '<div class="btn-group"><button class="btn btn-primary disabled">In cart</button></div>';
        } else {
            if (DB::table('books')->where('BookID', $book->BookID)->where('Quantity', '>', 0)->exists()) {
                <button type="button" class="btn btn-primary">Buy</button>';
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                <span class="sr-only">Toggle Dropdown</span>';
                </button>';
                <div class="dropdown-menu dropdown-btn-cart">';
                <button class="dropdown-item btn-cart">Add to cart</button>';
                </div>';
            }
            else {
                echo '<div class="btn-group"><button class="btn btn-primary disabled">Sold out</button></div>';
            }
        } -->
        </div>
      </div>
    </div>
<?php
  }
}
?>

</div>

<div class="flex py-10">
  {{ $books->appends(request()->except('page'))->links() }}
</div>
