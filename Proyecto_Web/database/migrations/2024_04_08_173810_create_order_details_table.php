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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('quantityOrder')->comment('Cantidad de productos');
            $table->integer('price')->comment('Precio del producto');
            $table->unsignedBigInteger('order_id')->comment('ID del pedido');
            $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('order_details');
    }
};
