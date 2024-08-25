<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopCarDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('shop_car_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_car_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantityShopCar')->default(1);
            $table->timestamps();

            $table->foreign('shop_car_id')->references('id')->on('shop_cars')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('shop_car_details', function (Blueprint $table) {
            $table->dropForeign(['shop_car_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('shop_car_details');
    }
}
