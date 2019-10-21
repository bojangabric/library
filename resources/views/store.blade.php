@extends('layouts.master')

@section('title', 'Store')
@section('content')

<div class="flex w-4/6 mx-auto mt-6">

  @include('partials.categories')

  <div class="w-10/12">

    <!-- @include('partials.sortby') -->

    <div class="flex flex-wrap">

      @include('partials.allbooks')

    </div>
  </div>
</div>

@endsection
