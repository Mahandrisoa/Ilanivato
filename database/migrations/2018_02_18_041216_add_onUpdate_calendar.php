<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOnUpdateCalendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * novaina an'ito ilay izy fa tsy ampy onUpdate
         */
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->text('event');
            $table->integer('group_id', false, true);
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('calendars', function (Blueprint $table) {
            $table->dropForeign('calendars_group_id_foreign');
        });
        Schema::dropIfExists('calendars');
    }
}
