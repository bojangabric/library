<div class="w-2/12 rounded-lg overflow-hidden mx-3 hidden lg:block">
  <?php
  $categories = App\Category::all();

  foreach ($categories as $category) {
    echo "<a class='text-lg text-blue-500 bg-white border px-4 py-2 block list-group-item' href='/store/categories/" . $category->CategoryID . "?sort=" . (isset($_GET['sort']) ? $_GET['sort'] : '') . "&gridview=" . (isset($_GET['gridview']) ? $_GET['gridview'] : '') . "'>" .
      $category->CategoryName . "</a>";
  }
  ?>
</div>

<script>
  var checkvalue = window.location.pathname;

  $(".list-group-item").each(function() {
    var hrefval = $(this).attr('href').split('?')[0];
    if (hrefval == checkvalue) {
      $(this).removeClass("text-blue-500");
      $(this).addClass("bg-blue-400");
      $(this).addClass("text-white");
    }
  });
</script>
