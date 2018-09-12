@extends('layouts.master')

@section('title', 'Home')
@section('content')

<div class="container">
    <header class="jumbotron my-4 textstroke">
        <h1 class="display-3">
        <strong>
            @guest
            Welcome to the Library!
            @else
            Welcome to the Library, {{ Auth::user()->name }}!
            @endguest
        </strong>
        </h1>
        <p class="lead"><strong>Search for any book in the world</strong></p>
        <a href="/store/categories/1" class="btn btn-primary btn-lg">Shop!</a>
    </header>
    <!-- Jumbotron -->

    <div class="row text-center">
        <?php
        $randBooks = App\Book::inRandomOrder()->take(4)->get();
        
        foreach ($randBooks as $book) {
            $author = App\Author::where("AuthorID", "=", $book->AuthorID)->first(); 
            echo '<div class="col-lg-3 col-md-6 mb-4">';
            echo '<div class="card h-100">';
            echo '<a href="/store/book/' . $book->BookID .
                '"><img class="card-img-top thumbnailpic" src="/images/' .
                $book->Image . '" alt="' . $book->Name . '"></a>';
            echo '<h4 class="card-title thumbnail-card-title">' . $book->Name . '</h4>';
            echo '<div class="card-body d-flex flex-column justify-content-end">';
            echo '<p class="card-text card-author">' . $author->Name . ' ' . $author->Surname . '</p>';
            echo '</div>';
            echo '<div class="card-footer">';
            echo '<a href="/store/book/' . $book->BookID . '" class="btn btn-primary">Find Out More!</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>

    </div>
    <!-- Items -->
</div>
@endsection
