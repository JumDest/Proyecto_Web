<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopCar extends Model
{
    protected $fillable = ['total', 'user_id'];

    public function details()
    {
        return $this->hasMany(ShopCarDetail::class);
    }
}

