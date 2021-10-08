<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPrice extends Model
{
    use HasFactory;

     protected $fillable = [
       'price1_91',
       'price2_91',

       'price1_diesel',
       'price2_diesel',

       'price1_95',
       'price2_95',

       'price1_kaz',
       'price2_kaz',
       'price_water',
       'user_id'
     ];
}
