<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokalbis extends Model
{
    protected $fillable = [
        'administratorius_id',
        'klientas_id',
        'tema',
    ];

    public function klientas()
    {
        return $this->hasOne(Klientas::class,'id', 'klientas_id');
    }
}
