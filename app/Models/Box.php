<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;
      protected $fillable = [
        'petrol91_id',
        'kaz_id',
        'diesel_id',
        'petrol95_id',
        'hasyna_id',
        'total',
        'delay_id',
        'clear',
        'water_id',
        'actitvity_id',
        'total_actitvity',
        'cash',
        'bank_id',
        'atm',
        'Total_cash_and_cash',
        'balance',
      ];
}
