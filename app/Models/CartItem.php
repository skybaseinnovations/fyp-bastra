<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    use HasFactory;protected $fillable = [
        'product_id',
        'quantity',
        'total',
        'user_id',
    ];
}