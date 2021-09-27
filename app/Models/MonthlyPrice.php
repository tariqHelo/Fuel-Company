<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPrice extends Model
{
    use HasFactory;

     protected $fillable = [
       'price1',
       'price2',
       'user_id'
     ];
}
