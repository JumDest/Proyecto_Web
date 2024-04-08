<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shop_car_details', function (Blueprint $table) {
            $table->id();
            $table->integer('quantityShopCar')->comment('Cantidad de productos');
            $table->unsignedBigInteger('shop_car_id')->comment('ID del carrito de compras');
            $table->foreign('shop_car_id')->references('id')->on('shop_cars');
            $table->unsignedBigInteger('product_id')->comment('ID del producto');
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_car_details');
    }
};
