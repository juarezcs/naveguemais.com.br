<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_type', 10);
            $table->string('cpf_cnpf', 50)->unique();
            $table->string('company_name', 255);
            $table->integer('economicactivity_id')->unsigned();
            $table->foreign('economicactivity_id')->references('id')->on('economic_activities')->onDelete('cascade');
            $table->string('landline_phone', 50)->nullable();
            $table->string('mobile_phone', 50)->nullable();
            $table->string('zip_code', 20);
            $table->string('address', 150);
            $table->string('number', 20);
            $table->string('city', 50);
            $table->string('neighborhood', 50);
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->boolean('accepted_terms');
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
        Schema::dropIfExists('advertisers');
    }
}
