@extends('layouts.test') @section('title', 'Store') @section('content')
<div class="container-fluid">
  <div class="row">
    @include('partials.categories')
    <div class="col-md-9 col-lg-9">
      <br> @include('partials.sortby')
      <div class="row">

        {{-- Cards horizntal test 
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <img class="card-img-left flex-auto d-none d-md-block" src="http://via.placeholder.com/200x250" style="width: 200px; height: 250px;">

          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Featured post</a>
            </h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a style="border: 1px solid black; width:103.5%; margin-left:-20px; margin-bottom:-20px; " href="#">Continue reading</a>
          </div>
        </div> --}}

      </div>
    </div>
  </div>
</div>
</div>
@endsection