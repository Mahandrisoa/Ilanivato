<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFampianaranaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fampianarana', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('numero')->nullable(true);
            $table->longText('contenu');
            $table->string('lien_youtube')->nullable(true);
            $table->string('lien_mp3')->nullable(true);
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
        Schema::dropIfExists('fampianarana');
    }
}
