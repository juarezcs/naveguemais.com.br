<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertiserUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertiser_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('advertiser_id')->unsigned();
            $table->foreign('advertiser_id')->references('id')->on('advertisers')->onDelete('cascade');
            $table->string('name', 150);
            $table->string('email', 100)->unique();
            $table->string('password');
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
        Schema::dropIfExists('advertiser_users');
    }
}
