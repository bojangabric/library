<?php
$selected_sort = "";
$selected_gridview = "";

if (isset($_GET['sort']) && !empty($_GET['sort']))
  $selected_sort = $_GET['sort'];

if (isset($_GET['gridview']) && !empty($_GET['gridview']))
  $selected_gridview = $_GET['gridview'];
?>

<form method="GET" action="" class="hidden md:block mb-6 mx-4">
  <div class="md:inline-flex text-white">
    <div class="inline-flex">
      <label class="bg-blue-400 border-r border-blue-400 font-semibold py-2 px-4 rounded-l items-center" for="sort">
        Sort by:
      </label>
      <select class="custom-select sort-view bg-white border border-gray-200 text-gray-700 py-2 px-2 pr-8 leading-tight focus:outline-none focus:border-gray-500" id="sort" name="sort" onchange="this.form.submit()">
        <option {{ $selected_sort=='relevance' ? 'selected' : '' }} value="relevance">Relevance</option>
        <option {{ $selected_sort=='price-asc' ? 'selected' : '' }} value="price-asc">Price: Low to high</option>
        <option {{ $selected_sort=='price-desc' ? 'selected' : '' }} value="price-desc">Price: High to low</option>
        <option {{ $selected_sort=='highest-rating' ? 'selected' : '' }} value="highest-rating">Highest rating</option>
        <option {{ $selected_sort=='most-reviews' ? 'selected' : '' }} value="most-reviews">Most reviews</option>
      </select>
    </div>

    <div class="inline-flex">
      <label class="bg-blue-400 border-r border-blue-400 font-semibold py-2 px-4 items-center" for="gridview">
        Grid:
      </label>
      <select class="appearansce-none bg-white border border-gray-200 text-gray-700 py-2 px-2 pr-8 leading-tight focus:outline-none focus:border-gray-500 rounded-r" id="gridview" name="gridview" onchange="this.form.submit()">
        <option {{ $selected_gridview=='gallery-view' ? 'selected' : '' }} value="gallery-view">Gallery</option>
        <!-- <option {{ $selected_gridview=='list-view' ? 'selected' : '' }} value="list-view">List</option> -->
      </select>
    </div>
  </div>
</form>
