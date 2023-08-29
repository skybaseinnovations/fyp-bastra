<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
        protected $fillable = [
        'product_id',
        'quantity',
        'total',
        'user_id',
    ];


    public function user()
    {
     return $this->belongsTo(User::class,'user_id','id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id','id');
    }
}