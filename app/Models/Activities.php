<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $fillable = [
    // 'name',
    // 'status'
         'pincher',
         'grocery',
         'washing',
         'flat',
         'room',
         'total',
         'user_id'
    ];
}
