<?php

use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
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

            $table->foreign(Book::ATTR_INT_AUTHOR)->references(Author::ATTR_INT_ID)->on(Author::ATTR_TABLE);
            $table->foreign(Book::ATTR_INT_PUBLISHER)->references(Publisher::ATTR_INT_ID)->on(Publisher::ATTR_TABLE);
            $table->dateTime(Book::ATTR_DATETIME_DELETED);
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
