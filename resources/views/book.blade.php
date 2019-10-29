@extends('layouts.master')

@section('title', $book->Name)
@section('content')
<div class="mt-4 md:w-3/5 xl:w-2/5 mx-auto px-2 sm:px-20 md:px-0">
  <div class="flex flex-wrap">
    <img class="w-full sm:w-48 rounded" src="/images/{{ $book->Image }}" alt="">
    <div class="sm:ml-3">
      <div class="text-4xl font-bold" id="bookName">{{ $book->Name }}</div>
      <?php
      $author = App\Author::where("AuthorID", "=", $book->AuthorID)->first();
      ?>
      <bold class="author-name">{{ $author->Name }} {{ $author->Surname }}</bold><br>
      <span class="text-yellow-500 text-3xl">{{ html_entity_decode($book->getRating()) }}</span>
      <div class="font-semibold text-2xl text-gray-800">${{ $book->Price }}</div>
      <div class="inline-flex text-white relative">
        <!-- <?php
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
              ?> -->
        <button class="bg-blue-500 border-r border-blue-400 hover:bg-blue-600 font-semibold py-2 px-4 rounded-l">
          Buy
        </button>
        <button class="bg-blue-500 hover:bg-blue-600 font-semibold py-2 px-4 rounded-r btn-cart">
          Add to cart
        </button>
      </div>
    </div>
  </div>
  <div class="mt-6">{{ $book->BookDescription }}</div>
  @include('partials.reviews')
</div>
@endsection
