<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Book::ATTR_TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->unsignedInteger('author_id');
            $table->unsignedInteger('publisher_id');

            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('publisher_id')->references('id')->on('publishers');
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
        Schema::dropIfExists(Book::ATTR_TABLE);
    }
};
