<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('cover_image')->nullable();
            $table->string('detail');
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_stop')->nullable();
            $table->integer('price')->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_stop')->nullable();
            $table->integer('amount');
            // created_at_and_updated_at
            $table->timestamps();
            // published_at
            $table->timestamp('published_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
