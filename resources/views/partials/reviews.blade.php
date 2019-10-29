<div class="bg-white rounded shadow-md my-6">
  <div class="font-semibold bg-gray-200 text-lg border-b p-3">
    Reviews
  </div>
  <div class="p-3">
    <?php
    $reviews = App\Review::where("BookID", $book->BookID)->get();

    foreach ($reviews as $review) {
      echo "<div class='py-2'>$review->Review</div>";
      echo "<div class='text-gray-500 font-light text-sm mb-4 border-b'>Posted by " . App\User::find($review->user_id)->name .
        " at " . date_format($review->created_at, "H:i") . " on " .
        date_format($review->created_at, "d/m/Y") . "</div>";
    }

    if ($reviews->isEmpty())
      echo "<div>There are no reviews for this book.</div>";
    ?>
    @if (Auth::check())
    <form method="POST" action="/store/book/{{ $book->BookID }}/reviews">
      {{ csrf_field() }}
      <textarea rows="5" class="mt-3 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-400" name="review" id="review" placeholder="Write a review..."></textarea>
      <button type="submit" class="bg-green-500 text-white font-semibold px-3 py-2 rounded">Leave a Review</button>
    </form>
    @endif
  </div>
</div>
