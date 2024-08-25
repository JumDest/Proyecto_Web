<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// Modelo de Product
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'stock', 'specs', 'brand_id', 'category_id', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

