<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriqueImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_images', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image_path');
            $table->integer('historique_id', false, true);
            $table->foreign('historique_id')
                ->references('id')
                ->on('historiques')
                ->onDelete('cascade');
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
        Schema::table('historique_images', function (Blueprint $table) {
            $table->dropForeign('historique_images_historique_id_foreign');
        });
        Schema::dropIfExists('historique_images');
    }
}
