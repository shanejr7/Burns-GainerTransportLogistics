<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('client_id')->nullable();
            $table->integer('category_id');
            $table->integer('active');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('location');
            $table->string('destination');
            $table->string('message')->nullable();
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
         Schema::dropIfExists('quotes');
    }
};
