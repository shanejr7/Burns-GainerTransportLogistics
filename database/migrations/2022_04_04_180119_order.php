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
         Schema::create('order', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('client_id');
            $table->integer('category_id');
            $table->integer('address_id');
            $table->integer('shipping_address_id');
            $table->integer('billing_id');
            $table->string('order_tracking_number');
            $table->integer('total_quantity');
            $table->float('total_price');
            $table->string('status');
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
           Schema::dropIfExists('order');
    }
};