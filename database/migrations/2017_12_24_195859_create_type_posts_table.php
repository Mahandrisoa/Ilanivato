<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelleType',150)->nullable(false);
            $table->integer('type_post_id' , false, true)->nullable(true);
            $table->foreign('type_post_id')->references('id')->on('type_posts')->onDelete('cascade');
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
        Schema::table('type_posts', function (Blueprint $table) {
            $table->dropForeign('type_posts_type_post_id_foreign');
        });
        Schema::dropIfExists('type_posts');
    }
}
