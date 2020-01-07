<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTEKDETAYSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TEKDETAY', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ASIL_ID');
            $table->string('telefonu');
            $table->string('adresi');
            $table->string('postakodu');
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
        Schema::dropIfExists('TEKDETAY');
    }
}
