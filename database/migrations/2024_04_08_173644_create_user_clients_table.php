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
        Schema::create('user_clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre del cliente');
            $table->integer('phone')->comment('Número de teléfono');
            $table->string('adress')->comment('Dirección del cliente');
            $table->string('email')->comment('Correo electrónico del cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_clients');
    }
};
