<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        // create_categories_table
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            // created_at_and_updated_at
            $table->timestamps();
        });

        // create_category_review_table
        Schema::create('category_review', function (Blueprint $table) {
            $table->primary(['category_id', 'review_id']);
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('review_id')->unsigned()->index();
            $table->foreign('review_id')->references('id')->on('reviews') ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('categories', function(Blueprint $table){
            Schema::drop('category_review');
            Schema::drop('categories');
        });
    }
}
