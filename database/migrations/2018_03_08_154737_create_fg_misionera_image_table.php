<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFgMisioneraImageTable extends Migration
{
    public function up()
    {
        Schema::create('fg_misionera_image', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image_path');
            $table->integer('fg_misionera_id', false, true);
            $table->foreign('fg_misionera_id')
                ->references('id')
                ->on('fg_misionera')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('fg_misionera_image', function (Blueprint $table) {
            $table->dropForeign('fg_misionera_image_fg_misionera_id_foreign');
        });
        Schema::dropIfExists('fg_misionera_image');
    }
}
