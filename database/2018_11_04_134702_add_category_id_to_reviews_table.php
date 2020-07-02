<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryIdToReviewsTable extends Migration
{
    public function up()
    {

        Schema::table('reviews', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->default(1);
            $table->foreign('category_id','reviews_category_id_foreign')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_category_id_foreign');
            $table->dropColumn('category_id');
        });
    }
}
