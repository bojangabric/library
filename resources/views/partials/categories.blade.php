<div class="col-lg-3">
  <h1 class="my-4 ml-5"></h1>
  <div class="list-group ml-5" style="top:80px">
    <?php
    $categories = App\Category::all();

    foreach ($categories as $category) 
    {
      echo "<a href='/store/categories/" . $category->CategoryID . "?sort=" .
        (isset($_GET['sort']) ? $_GET['sort'] : '') . "&gridview=" .
        (isset($_GET['gridview']) ? $_GET['gridview'] : '') . "' class='list-group-item'>" .
        $category->CategoryName . "</a>";
    }
    ?>
  </div>
</div>

<script>
  var checkvalue = window.location.pathname;

  $(".list-group-item").each(function () {
    var hrefval = $(this).attr('href').split('?')[0];
    if (hrefval == checkvalue) {
      $(this).addClass("category-active");
    }
  });
</script>