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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name')->comment('Nombre del producto');
        $table->string('description')->comment('Descripción del producto');
        $table->integer('price')->comment('Precio del producto');
        $table->integer('stock')->comment('Cantidad en stock');
        $table->string('specs')->comment('Especificaciones del producto');
        $table->unsignedBigInteger('brand_id')->comment('ID de la marca');
        $table->foreign('brand_id')->references('id')->on('brands');
        $table->unsignedBigInteger('category_id')->comment('Categoria');
        $table->foreign('category_id')->references('id')->on('categories');
        $table->string('image_url')->comment('URL de la imagen del producto');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
