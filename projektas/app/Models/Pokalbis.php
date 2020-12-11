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
}
