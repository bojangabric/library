@extends('layouts.master')

@section('title', 'Home')
@section('content')

<div class="w-4/6 mx-auto">
    <div class="jumbotron my-4 text-white rounded pl-10 pb-5">
        <p class="text-6xl textstroke font-semibold pt-16">
            @guest
            Welcome to the Library!
            @else
            Welcome to the Library, {{ Auth::user()->name }}!
            @endguest
        </p>
        <p class="text-xl textstroke font-semibold">Search for any book in the world</p>
        <div class="my-5">
            <a href="/store/categories/1" class="bg-blue-600 py-3 px-5 rounded">Shop!</a>
        </div>
    </div>

    <div class="flex flex-wrap justify-between">
        <?php
        $randBooks = App\Book::inRandomOrder()->take(4)->get();

        foreach ($randBooks as $book) {
            $author = App\Author::where("AuthorID", "=", $book->AuthorID)->first();
            ?>
            <div class="w-1/4">
                <div class="mx-2 rounded bg-white text-center pb-6 shadow-xl">
                    <a href="{{'/store/book/' . $book->BookID}}">
                        <img class="w-full h-64 rounded-t" src="{{'/images/' . $book->Image}}" alt="{{'/images/' . $book->Image}}">
                    </a>
                    <p class="text-2xl mt-5 mb-1 font-semibold">{{$book->Name}}</p>
                    <p class="mb-6">{{$author->Name . ' ' . $author->Surname}}</p>
                    <div class="bg-blue-500 w-1/2 mx-auto rounded text-white py-2">
                        <a href="{{'/store/book/' . $book->BookID}}">Find Out More!</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
@endsection
