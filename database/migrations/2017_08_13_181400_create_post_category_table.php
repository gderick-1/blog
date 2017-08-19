<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post_categories', function (Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->integer('post_id');
            $table->integer('category_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop table post categoris if exists
        Schema::dropIfExists('post_categories');
    }
}
