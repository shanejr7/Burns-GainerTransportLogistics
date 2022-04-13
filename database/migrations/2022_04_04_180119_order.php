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
         Schema::create('orders', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('client_id')->nullable();
            $table->integer('category_id');
            $table->string('address');
            $table->string('shipping_address');
            $table->string('billing_address');
            $table->string('order_tracking_number');
            $table->integer('total_quantity');
            $table->float('total_price');
            $table->string('status');
            $table->string('private_key')->nullable();
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
           Schema::dropIfExists('orders');
    }
};
