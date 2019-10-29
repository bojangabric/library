@extends('layouts.master')

@section('title', 'Store')
@section('content')

<div class="flex xl:w-5/6 mx-auto mt-6 justify-center">

  @include('partials.categories')

  <div class="w-10/12">

    <!-- @include('partials.sortby') -->

    <div class="flex flex-wrap">

      @include('partials.allbooks')

    </div>
  </div>
</div>

@endsection
