<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initial extends Model
{
    use HasFactory;

     protected $fillable = [
         'number_initial_91',
         'number_initial_diesel',
         'number_initial_95',
         'number_initial_kaz',
         'number_initial_water',
         'user_id'
     ];
}
  
