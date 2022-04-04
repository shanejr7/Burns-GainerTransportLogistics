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
        Schema::create('package', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('product_id');
            $table->integer('cargo_id');
            $table->string('code_ean_product')->nullable();
            $table->string('sku')->nullable();
            $table->string('volume')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
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
        Schema::dropIfExists('package');
    }
};