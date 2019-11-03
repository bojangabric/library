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

<div class="mx-auto mt-8 p-8 pb-5 bg-white shadow-md rounded w-full max-w-xl">
  <table class="w-full">
    <thead>
      <tr>
        <th class="px-4 py-2 text-left">Book</th>
        <th class="px-4 py-2 text-right">Price</th>
      </tr>
    </thead>
    <tbody>
      @if (empty($bookIDs))
      <tr>
        <td class="border px-4 py-2">There are no books in your shopping cart.</td>
        <td class="border px-4 py-2"></td>
      </tr>
      @endif

      @for ($i = 0; $i < count($bookIDs); $i++) <tr>
        <td class="border px-4 py-2 text-left">
          <a href="/store/book/{{ $bookIDs[$i] }}" class="text-blue-500 hover:text-blue-600">{{ $bookNames[$i][0] }}</a>
        </td>
        <td class="border px-4 py-2 text-right">
          ${{ $bookPrices[$i][0] }}
        </td>
        <td class="text-right pl-2 sm:pl-0">
          <i class="delete-book fa fa-minus-circle cursor-pointer" data-bookid="{{ $bookIDs[$i] }}"></i>
        </td>
        </tr>
        @endfor
    </tbody>
  </table>

  <div class="flex items-center justify-between mt-8 px-3">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-8 rounded focus:outline-none focus:shadow-outline" type="submit">
      {{ __('Checkout') }}
    </button>
    <div>
      <?php
      $total = 0;
      foreach ($bookPrices as $bookPrice) {
        $total += $bookPrice[0];
      }
      ?>
      <div class="text-xl">Total: <span class="font-semibold text-2xl">${{$total}}</span></div>
    </div>
  </div>
</div>


<script>
  $(function() {
    $(".delete-book").on("click", function() {
      $(this).closest("tr").remove();

      $.ajax({
        type: 'POST',
        url: '/deleteBookFromCart',
        data: {
          'userid': <?php echo json_encode(Auth::user()->id); ?>,
          'bookid': $(this).attr('data-bookid')
        },
      });
    });
  });
</script>
@endsection
