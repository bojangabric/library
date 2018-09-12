<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteAuthorBooksTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER `delete_author_books_trigger` BEFORE DELETE ON `authors` FOR EACH ROW
            BEGIN
                DELETE FROM books WHERE books.AuthorID = old.AuthorID;
            END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `delete_author_books_trigger`');
    }
}
