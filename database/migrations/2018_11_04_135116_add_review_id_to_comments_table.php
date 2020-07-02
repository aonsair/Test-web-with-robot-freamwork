<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReviewIdToCommentsTable extends Migration
{
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->integer('review_id')->unsigned()->default(1);
            $table->foreign('review_id','comments_review_id_foreign')->references('id')->on('reviews')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_review_id_foreign');
            $table->dropColumn('review_id');
        });
    }
}
