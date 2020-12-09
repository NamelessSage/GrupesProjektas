<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zinutes extends Model
{
    protected $fillable = [
        'pokalbio_id',
        'tekstas',
        'siuntejas',
    ];
}
