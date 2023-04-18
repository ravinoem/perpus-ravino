<?php

use App\Models\Author;
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
        Schema::create(Author::ATTR_TABLE, function (Blueprint $table) {
            $table->increments(Author::ATTR_INT_ID);
            $table->string(Author::ATTR_CHAR_NAME);
            $table->string(Author::ATTR_CHAR_ADDRESS);
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
        Schema::dropIfExists(Author::ATTR_TABLE);
    }
};
