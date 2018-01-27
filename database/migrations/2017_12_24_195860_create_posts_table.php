<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->nullable(false);
            $table->text('content');
            $table->integer('group_id',false, true);
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->integer('type_post_id', false, true);
            $table->foreign('type_post_id')->references('id')->on('type_posts')->onDelete('cascade');
            $table->boolean('hasPosts')->default(false);
            $table->boolean('isValid')->default(false);
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
        Schema::table('posts' , function (Blueprint $table) {
            $table->dropForeign('posts_group_id_foreign');
            $table->dropForeign('posts_type_post_id_foreign');
        });
        Schema::dropIfExists('posts');
    }
}
