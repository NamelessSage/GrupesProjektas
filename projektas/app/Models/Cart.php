<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'part_id',
        'user_id',
        'price',
        'quantity',
        'discount',
    ] ;

    public function cart_parts()
    {
        return $this->hasMany(CartPart::class, 'cart_id', 'id');
    }
    public function getTotalPrice()
    {
        if($this->discount == 1){
            $discount = 0;
            return $this->cart_parts->sum('total_price')*(1-$discount/100);
        }
        return $this->cart_parts->sum('total_price')*(1-$this->discount/100);
    }
    public function discount(){
        return $this->hasOne(Discount::class);
    }
}
