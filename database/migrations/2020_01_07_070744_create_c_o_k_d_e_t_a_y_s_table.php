<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCOKDETAYSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COKDETAY', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ASIL_ID');
            $table->string('satisTarihi');
            $table->string('satilanUrunAdi');
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
        Schema::dropIfExists('COKDETAY');
    }
}
