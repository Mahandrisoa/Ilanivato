<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectifs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intitule');
            $table->integer('group_id')->unsigned()->nullable();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
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
        Schema::table('objectifs', function (Blueprint $table) {
            $table->dropForeign('objectifs_group_id_foreign');
        });
        Schema::dropIfExists('objectifs');
    }
}
