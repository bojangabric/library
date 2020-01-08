@extends('layouts.master')

@section('title', 'Home')
@section('content')

<div class="bg-gray-900 pb-40">
  <div class="text-center text-4xl font-black uppercase pt-16 pb-20 text-white">Discover your next book</div>
</div>
<div class="xl:w-3/5 mx-auto -mt-32 ">
  <flickity data-aos="fade-up" ref="flickity" :options="flickityOptions">
    <book image="steve_jobs"></book>
    <book image="it"></book>
    <book image="murder_on_the_orient_express"></book>
    <book image="ready_player_one"></book>
    <book image="the_diary_of_a_young_girl"></book>
    <book image="the_hitchhikers_guide_to_the_galaxy"></book>
  </flickity>
</div>

<div class="xl:w-3/5 mx-auto px-10">
  <div class="text-4xl font-black uppercase pt-32 pb-10 text-gray-800">
    Browse by category
  </div>
  <div class="flex w-full justify-between">
    <div class="bg-pink-400 rounded w-56 flex justify-center py-4">
      <div class="flex items-center">
        <div><img class="h-12 w-12 mr-4" src="images/cooking.png"></div>
        <div class="text-white uppercase tracking-wider font-semibold">Business</div>
      </div>
    </div>
    <div class="bg-blue-400 rounded w-56 flex justify-center py-4">
      <div class="flex items-center">
        <div><img class="h-12 w-12 mr-4" src="images/cooking.png"></div>
        <div class="text-white uppercase tracking-wider font-semibold">Romantic</div>
      </div>
    </div>
    <div class="bg-green-400 rounded w-56 flex justify-center py-4">
      <div class="flex items-center">
        <div><img class="h-12 w-12 mr-4" src="images/cooking.png"></div>
        <div class="text-white uppercase tracking-wider font-semibold">Biography</div>
      </div>
    </div>
    <div class="bg-red-400 rounded w-56 flex justify-center py-4">
      <div class="flex items-center">
        <div><img class="h-12 w-12 mr-4" src="images/cooking.png"></div>
        <div class="text-white uppercase tracking-wider font-semibold">Cookbooks</div>
      </div>
    </div>
  </div>
  <div class="flex pt-32 pb-10">
    <div class="text-4xl font-black uppercase text-gray-800 w-3/5">
      Audio books
    </div>
    <popular-categories></popular-categories>
  </div>

</div>
@endsection
