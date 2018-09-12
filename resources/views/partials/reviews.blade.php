<div class="card card-outline-secondary my-4">
    <div class="card-header">
        <strong>Customer Reviews</strong>
    </div>
    <div class="card-body">
            <?php
                $reviews = App\Review::where("BookID", $book->BookID)->get();

                foreach ($reviews as $review) {
                    echo "<p>$review->Review<p>";
                    echo "<small class='text-muted'>Posted by " . App\User::find($review->user_id)->name .
                        " at " . date_format($review->created_at, "H:i") . " on " .
                        date_format($review->created_at, "d/m/Y") . "</small><hr>";
                }

                if ($reviews->isEmpty())
                    echo "<p>There are no reviews for this book.</p>";
            ?> 
        @if (Auth::check())
            <form method="POST" action="/store/book/{{ $book->BookID }}/reviews">
            {{ csrf_field() }}
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="review" id="review" maxlength="400" placeholder="Write a review..."></textarea>
                </div>  
                <div class="form-group">
                <button type="submit" class="btn btn-success float-right">Leave a Review</button>
                </div>
            </form>
        @endif
    </div>
</div>