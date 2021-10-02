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
        'clear',
        'price',
        'value',
        'size',
        'user_id'
            
    ];

    protected $casts = [
        'meter' => 'array'
    ];
}
