<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meran extends Model
{
    use HasFactory;

     protected $fillable = [
            'statement',
            'partial_credit',
            'total_credit',
            'partial_debt',
            'total_debt'
    ];
}
