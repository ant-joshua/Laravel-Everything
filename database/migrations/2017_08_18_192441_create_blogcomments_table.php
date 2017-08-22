<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blogs')
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
        Schema::dropIfExists('blogcomments');
    }
}
