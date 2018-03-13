<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMhfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahafantatra_feno', function (Blueprint $table){
            $table->integer('jour')->unsigned();
            $table->string('mois');
            $table->string('fandaharana_maraina');
            $table->longText('soratra_masina_maraina');
            $table->string('fandaharana_hariva');
            $table->longText('soratra_masina_hariva');
            $table->primary(array('jour','mois'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahafantatra_feno');
    }
}
