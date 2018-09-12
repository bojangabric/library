@extends('layouts.master') 

@section('title', 'Shopping cart') 
@section('content') 
<?php
  $books = DB::table('shopping_carts')->where('user_id', Auth::user()->id)->pluck('BookID');
  $bookNames = [];
  $bookIDs = [];
  $bookPrices = [];
  foreach ($books as $bookid) {
    $bookNames[] = DB::table('books')->where('BookID', $bookid)->pluck('Name');
    $bookIDs[] = $bookid;
    $bookPrices[] = DB::table('books')->where('BookID', $bookid)->pluck('Price');
  }

?>

<div class="container ml-5 mt-4">
    <div class="col-lg-9 offset-5">
      <div class="shopping-cart">Shopping cart</div>
      <table class="table table-hover cart-table">
        <thead>
          <tr>
            <th>Book</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (empty($bookIDs))
              echo '<tr><td>There are no books in your shopping cart.</td><td></td></tr>';
            for ($i=0; $i < count($bookIDs); $i++) { 
              echo '<tr>';
              echo '<td><a href="/store/book/' . $bookIDs[$i] .'">' . $bookNames[$i][0] . '</a></td>';
              echo '<td style="font-size: 12pt;">$' . $bookPrices[$i][0] . '</td>';
              echo '<td align="center"><i class="delete-book fa fa-minus-circle"></i></td>';
              echo '</tr>';
            }
          ?>
          <tr>
            <td>
              <button class="btn btn-primary">Checkout</button>
            </td>
            <td>
            <?php
                $total = 0;
                foreach ($bookPrices as $bookPrice){
                  $total += $bookPrice[0];
                }
                echo 'Total: $' . $total;
              ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>

<script>
  $(function() {
    $(".delete-book").on("click", function () {
      var bookname = $(this).closest("tr").find('td:first').text();
      $(this).closest("tr").remove();

      $.ajax({
        type: 'POST',
        url: '/deleteBookFromCart',
        data: {
          'userid': <?php echo json_encode(Auth::user()->id); ?>,
          'bookname': bookname
        },
      });
    });
  });
</script>
@endsection
