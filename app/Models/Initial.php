<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initial extends Model
{
    use HasFactory;

     protected $fillable = [
        'number_initial',
        'user_id'
     ];
}
