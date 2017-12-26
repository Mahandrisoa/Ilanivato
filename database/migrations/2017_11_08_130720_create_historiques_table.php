<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiques', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->longText('evenement');
            $table->timestamps();
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
        Schema::table('historiques', function (Blueprint $table) {
            $table->dropForeign('historiques_group_id_foreign');
        });
        Schema::dropIfExists('historiques');
    }
}
