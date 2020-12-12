<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartPart extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id',
        'part_id',
        'quantity',
        'total_price',
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class, 'id', 'cart_id');
    }

    public function part()
    {
        return $this->hasOne(Part::class, 'id', 'part_id');
    }
}
