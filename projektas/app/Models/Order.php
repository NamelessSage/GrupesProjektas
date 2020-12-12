<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id',
        'status',
    ] ;

    public function carts()
    {
        return $this->hasOne(Cart::class, 'id', 'cart_id');
    }
}
