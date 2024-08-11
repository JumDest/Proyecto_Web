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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->integer('score')->comment('Calificación');
            $table->string('comment')->comment('Comentario');
            $table->unsignedBigInteger('product_id')->comment('ID del producto');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('user_id')->comment('ID del usuario');
            $table->foreign('user_id')->references('id')->on('user_clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
