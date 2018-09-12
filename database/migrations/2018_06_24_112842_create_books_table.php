<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('BookID');
            $table->integer('AuthorID')->unsigned();
            $table->foreign('AuthorID')->references('AuthorID')->on('authors');
            $table->string('Name');
            $table->decimal('Price', 5,2);
            $table->integer('Quantity');
            $table->integer('CategoryID')->unsigned();
            $table->foreign('CategoryID')->references('CategoryID')->on('categories');
            $table->integer('StarRating');
            $table->date('DateOfPublication');
            $table->string('Image');
            $table->text('BookDescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
