<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbassyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embassy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('COUNTRY_ID')->nullable();
            $table->string('LOCATION')->nullable();
            $table->string('CONTACT_PERSON')->nullable();
            $table->string('POSITION')->nullable();
            $table->string('MOBILE_NO')->nullable();
            $table->string('REMARKS')->nullable();
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
        Schema::drop('embassy');
    }
}
