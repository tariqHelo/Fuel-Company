<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;
    protected $fillable = [
             'type',
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
