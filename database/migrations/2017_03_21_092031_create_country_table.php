<?php

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->increments('id');
            $table->string('COUNTRY_NAME', 40);
            $table->increments('COUNTRY_TEL_CODE');
            $table->string('CONTINENT', 40);
            $table->string('CURRENCY_NAME', 40);
            $table->string('SYMBOL', 40);
            $table->string('IMAGE_PATH', 40);
            $table->string('REMARKS', 200);
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
        Schema::drop('country');
    }
}
