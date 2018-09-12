<?php
$selected_sort = "";
$selected_gridview = "";

if (isset($_GET['sort']) && !empty($_GET['sort']))
  $selected_sort = $_GET['sort'];

if (isset($_GET['gridview']) && !empty($_GET['gridview']))
  $selected_gridview = $_GET['gridview'];
?>
  <br>
  <form method="GET" action="">
    <div class="input-group mb-3 sort">
      <div class="input-group-prepend">
        <label class="input-group-text" for="sort">Sort by:</label>
      </div>
      <select class="custom-select sort-view" id="sort" name="sort" onchange="this.form.submit()">
        <option {{ $selected_sort=='relevance' ? 'selected' : '' }} value="relevance">Relevance</option>
        <option {{ $selected_sort=='price-asc' ? 'selected' : '' }} value="price-asc">Price: Low to high</option>
        <option {{ $selected_sort=='price-desc' ? 'selected' : '' }} value="price-desc">Price: High to low</option>
        <option {{ $selected_sort=='highest-rating' ? 'selected' : '' }} value="highest-rating">Highest rating</option>
        <option {{ $selected_sort=='most-reviews' ? 'selected' : '' }} value="most-reviews">Most reviews</option>
      </select>

      <div class="input-group-prepend grid">
        <label class="input-group-text" for="gridview">Grid:</label>
      </div>
      <select class="custom-select grid-view" id="gridview" name="gridview" onchange="this.form.submit()">
        <option {{ $selected_gridview=='gallery-view' ? 'selected' : '' }} value="gallery-view">Gallery</option>
        <option {{ $selected_gridview=='list-view' ? 'selected' : '' }} value="list-view">List</option>
      </select>
    </div>
  </form>