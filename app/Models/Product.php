<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;protected $fillable = [
        'name',
        'price',
        'description',
        'rate_count',
        'img_url',
    ];

    public function productCategory(){
        return $this->belongsTo(ProductCategory::class);
    }

    public function cartItem()
    {
        return $this->hasOne(CartItem::class);
    }

}