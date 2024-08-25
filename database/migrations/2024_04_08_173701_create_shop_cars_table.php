<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopCarsTable extends Migration
{
    public function up()
    {
        Schema::create('shop_cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Asumimos que estás usando un campo user_id
            $table->float('total', 8, 2);
            $table->timestamps();

            // Agrega la clave foránea si existe una tabla de usuarios
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('shop_cars', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('shop_cars');
    }
}
