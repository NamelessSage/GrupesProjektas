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

    public function orders()
    {
        return $this->hasMany(Cart::class);
    }
}
