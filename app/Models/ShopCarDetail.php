<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ShopCarDetail extends Model
{
    protected $fillable = ['shop_car_id', 'product_id', 'quantityShopCar'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function shopCar()
    {
        return $this->belongsTo(ShopCar::class);
    }
}

