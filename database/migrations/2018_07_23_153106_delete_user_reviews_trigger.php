<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteUserReviewsTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER `delete_user_reviews_trigger` BEFORE DELETE ON `users` FOR EACH ROW
            BEGIN
                DELETE FROM reviews WHERE reviews.user_id = user_id;
            END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `delete_user_reviews_trigger`');
    }
}
