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
        Schema::create('product', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('order_id')->unique();
            $table->string('code_ean_product')->nullable();
            $table->string('sku')->nullable();
            $table->string('name');
            $table->string('description');
            $table->string('volume')->nullable();
            $table->string('height')->nullable();
            $table->float('unit_price')->nullable();
            $table->string('image_url')->nullable();
            $table->integer('active');
            $table->integer('units');
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
            Schema::dropIfExists('product');
    }
};
