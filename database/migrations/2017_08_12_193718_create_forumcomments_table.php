<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forumcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment');
            $table->integer('forum_id')->unsigned();
            $table->foreign('forum_id')->references('id')->on('forums')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->dateTime('published_at');
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
        Schema::dropIfExists('forumcomments');
    }
}
