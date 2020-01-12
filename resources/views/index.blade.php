@extends('layouts.master')

@section('title', 'Home')
@section('content')

<div style="margin-top: -25rem;">
  <div class="pb-40">
    <div class="text-center text-5xl font-black uppercase pt-16 pb-4 text-white">Discover your next book</div>
  </div>
  <div class="md:w-4/5 xl:w-3/5 mx-auto">
    <flickity data-aos="fade-up" ref="flickity" :options="flickityOptions">
      <book title="Red Queen" author="Victoria Aveyard" image="red-queen"></book>
      <book title="Wild Goose Chase" author="Mark Batterson" image="wild-goose-chase"></book>
      <book title="Unravel me" author="author" image="unravel-me"></book>
      <book title="Game of Thrones" author="George R. R. Martin" image="got"></book>
    </flickity>
  </div>
</div>

<div class="xl:w-3/5 mx-auto px-4 sm:px-10 xl:px-0">
  <div class="text-2xl sm:text-3xl font-black uppercase pt-20 sm:pt-32 mb-6 text-gray-800">
    Browse by category
  </div>
  <div class="flex flex-wrap justify-between">
    <div class="flex flex-col w-full sm:w-1/2 lg:w-1/4">
      <a href="#!" class="w-full sm:w-auto rounded mr-2 sm:mr-4 py-2 mb-4 bg-blue-400 hover:bg-blue-500 transition-colors ease-in duration-100">
        <div class="flex items-center justify-center">
          <div><img class="h-12 w-12 mr-4" src="images/icons/piggy.png"></div>
          <div class="text-white uppercase tracking-wider font-semibold">Business</div>
        </div>
      </a>
    </div>
    <div class="flex flex-col w-full sm:w-1/2 lg:w-1/4">
      <a href="#!" class="w-full sm:w-auto rounded lg:mr-4 py-2 mb-4 bg-pink-400 hover:bg-pink-500 transition-colors ease-in duration-100">
        <div class="flex items-center justify-center">
          <div><img class="h-12 w-12 mr-4" src="images/icons/heart.png"></div>
          <div class="text-white uppercase tracking-wider font-semibold">Romantic</div>
        </div>
      </a>
    </div>
    <div class="flex flex-col w-full sm:w-1/2 lg:w-1/4">
      <a href="#!" class="w-full sm:w-auto rounded mr-2 sm:mr-4 py-2 mb-4 bg-green-400 hover:bg-green-500 transition-colors ease-in duration-100">
        <div class="flex items-center justify-center">
          <div><img class="h-12 w-12 mr-4" src="images/icons/biography.png"></div>
          <div class="text-white uppercase tracking-wider font-semibold">Biography</div>
        </div>
      </a>
    </div>
    <div class="flex flex-col w-full sm:w-1/2 lg:w-1/4">
      <a href="#!" class="w-full sm:w-auto rounded py-2 mb-4 bg-red-400 hover:bg-red-500 transition-colors ease-in duration-100">
        <div class="flex items-center justify-center">
          <div><img class="h-12 w-12 mr-4" src="images/icons/cooking.png"></div>
          <div class="text-white uppercase tracking-wider font-semibold">Cookbooks</div>
        </div>
      </a>
    </div>
  </div>

  <div class="md:flex pt-20">
    <audio-books></audio-books>
    <popular-categories></popular-categories>
  </div>

  <books-for-children class="pt-20"></books-for-children>

  <div class="xl:flex pt-20 lg:pt-32">
    <top-books></top-books>
    <top-authors></top-authors>
  </div>
</div>
@endsection
