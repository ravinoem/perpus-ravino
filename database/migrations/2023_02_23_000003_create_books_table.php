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
            $table->increments(Book::ATTR_INT_ID);
            $table->string(Book::ATTR_CHAR_NAME);

            $table->unsignedInteger(Book::ATTR_INT_AUTHOR);
            $table->unsignedInteger(Book::ATTR_INT_PUBLISHER);

            $table->foreign(Book::ATTR_INT_AUTHOR)->references('id')->on('authors');
            $table->foreign('publisher_id')->references('id')->on('publishers');
            $table->timestamps();
            $table->softDeletes();
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
