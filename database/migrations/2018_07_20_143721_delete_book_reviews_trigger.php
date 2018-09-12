<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteBookReviewsTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER `delete_book_reviews_trigger` BEFORE DELETE ON `books` FOR EACH ROW
            BEGIN
                DELETE FROM reviews WHERE reviews.BookID = old.BookID;
            END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `delete_book_reviews_trigger`');
    }
}
