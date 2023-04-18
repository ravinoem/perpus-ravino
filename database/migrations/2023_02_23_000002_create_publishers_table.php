<?php

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
        Schema::create(Publisher::ATTR_TABLE, function (Blueprint $table) {
            $table->increments(Publisher::ATTR_INT_ID);
            $table->string(Publisher::ATTR_CHAR_NAME);
            $table->string(Publisher::ATTR_CHAR_ADDRESS);
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
        Schema::dropIfExists(Publisher::ATTR_TABLE);
    }
};
