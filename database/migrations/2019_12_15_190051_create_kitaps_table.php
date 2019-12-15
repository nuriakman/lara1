<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('kitapAdi');
            $table->string('kitapYazari');
            $table->integer('yayinYili');
            $table->mediumtext('ozeti');

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
        Schema::dropIfExists('kitaps');
    }
}
