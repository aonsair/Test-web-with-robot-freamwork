<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{

    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('body');
            $table->string('cover_image')->nullable();
            // created_at_and_updated_at
            $table->timestamps();
            // published_at
            $table->timestamp('published_at')->nullable();
            // newcomment_at
            $table->timestamp('newcomment_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
