<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostsCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $collection) {
            $collection->increments('id');
            $collection->string('title');
            $collection->string('slug', 60);
            $collection->text('body')->nullable();
            $collection->bool('published')->default(0);
            $collection->integer('user_id')->unsigned();
            $collection->timestamps();

            $collection->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
