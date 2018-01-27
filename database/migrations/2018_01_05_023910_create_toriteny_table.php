<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToritenyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toriteny', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->longText('content');
            $table->string('author');
            $table->integer('group_id',false, true);
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
        Schema::table('toriteny', function (Blueprint $table) {
            $table->dropForeign('toriteny_group_id_foreign');
        });
        Schema::dropIfExists('toriteny');
    }
}
