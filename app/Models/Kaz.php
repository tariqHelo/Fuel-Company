<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaz extends Model
{
    use HasFactory;

    protected $fillable = [
        'meter',
        'total',
        'qty',
        'caliber',
        'amount',
        'price',
        'size',
            
    ];

    protected $casts = [
        'meter' => 'array'
    ];
}
