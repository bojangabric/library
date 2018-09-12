@extends('layouts.master')

@section('title', 'Store')
@section('content')

<div class="container">

  <div class="row">
  
    @include('partials.categories')

    <div class="col-lg-9">

      @include('partials.sortby')

      <div class="row">

        @include('partials.allbooks')

      </div>

    </div>
  </div>

</div>

@endsection
