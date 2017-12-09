<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presidents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(true);
            $table->integer('group_id',false, true);
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('presidents', function (Blueprint $table) {
            $table->dropForeign('presidents_group_id_foreign');
        });
        Schema::dropIfExists('presidents');
    }
}
