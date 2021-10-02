<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petrol91 extends Model
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

    // public function getCreatedAtAttribute($date)
    // {
    //   return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    // }
}
