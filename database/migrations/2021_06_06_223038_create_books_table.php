<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('book_name');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->unsignedBigInteger('publishing_house_id');
            $table->foreign('publishing_house_id')->references('id')->on('publishing_houses')->onDelete('cascade');
            $table->unsignedBigInteger('book_rating_id');
            $table->foreign('book_rating_id')->references('id')->on('book_ratings')->onDelete('cascade');
            $table->integer('issue_number');
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
