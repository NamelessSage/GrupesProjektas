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
    ] ;

    public function cart_parts()
    {
        return $this->hasMany(PartItem::class);
    }
}
