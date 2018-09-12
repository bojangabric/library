@extends('layouts.master')

@section('title', $book->Name)
@section('content')

<div class="container">
  <div class="row">
    @include('partials.categories')
    <div class="col-lg-9">
      <div class="mt-4">
        <img class="card-img-top bookpic" src="/images/{{ $book->Image }}" alt="">
        <div class="card-body">
          <h3 class="card-title book" id="bookName"><strong>{{ $book->Name }}</strong></h3>
            <?php 
            $author = App\Author::where("AuthorID", "=", $book->AuthorID)->first(); 
            ?>
          <bold class="author-name">{{ $author->Name }} {{ $author->Surname }}</bold><br>
          <span class="card-rating">{{ html_entity_decode($book->getRating()) }}</span>
        </div>

        <h4>${{ $book->Price }}</h4>
        <div class="btn-group mt-4">
        <?php
        if (Auth::user() && DB::table('shopping_carts')->where('user_id', Auth::user()->id)->where('BookID', $book->BookID)->exists()) {
          echo '<button type="button" class="btn btn-primary disabled">In cart</button>';
        } else {
          if (DB::table('books')->where('BookID', $book->BookID)->where('Quantity', '>', 0)->exists()) {
            echo '<button type="button" class="btn btn-primary">Buy</button>
              <button class="btn btn-primary btn-cart">Add to cart</button>';
          } else {
            echo '<button type="button" class="btn btn-primary disabled">Sold out</button>';
          }
        }
        ?>
        </div>
        <p class="card-text"><br>{{ $book->BookDescription }}</p>
        @include('partials.reviews')
      </div>
    </div> 
  </div>
</div>
@endsection
