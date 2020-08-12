<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferencesAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campaign', function (Blueprint $table) {
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('difficult_situation_id')->references('id')->on('difficult_situation')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('donate', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('campaign_id')->references('id')->on('campaign')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('comment', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('campaign_id')->references('id')->on('campaign')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
}
