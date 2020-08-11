<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 20);
            $table->string('email', 255)->unique();
            $table->string('number_phone', 13)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 32);
            $table->text('avatar')->nullable();
            $table->integer('social_id')->nullalble();
            $table->boolean('is_admin')->default(false);
            $table->unsignedBigInteger('price_total')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
