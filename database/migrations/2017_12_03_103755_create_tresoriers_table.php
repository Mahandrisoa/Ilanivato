<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTresoriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tresoriers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(true);
            $table->string('avatar')->default('default.jpg');
            $table->integer('group_id',false, true);
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tresoriers', function (Blueprint $table) {
            $table->dropForeign('tresoriers_group_id_foreign');
        });
        Schema::dropIfExists('tresoriers');
    }
}
