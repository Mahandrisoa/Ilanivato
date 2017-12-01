<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGroupHistorique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historiques', function (Blueprint $table) {
            $table->integer('group_id',false, true);
            $table->foreign('group_id')->references('id')->on('groups');
            $table->dropTimestamps();
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
            $table->dropForeign('group_id');
        });
    }
}
