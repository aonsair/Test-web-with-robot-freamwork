<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvinceIdToReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->integer('province_id')->unsigned()->default(1);
            $table->foreign('province_id','reviews_province_id_foreign')->references('id')->on('provinces')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_province_id_foreign');
            $table->dropColumn('province_id');
        });
    }
}
