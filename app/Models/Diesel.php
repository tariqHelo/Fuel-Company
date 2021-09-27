<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diesel extends Model
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
             'user_id'
            
    ];

    protected $casts = [
        'meter' => 'array'
    ];
}
