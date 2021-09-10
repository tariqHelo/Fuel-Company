<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petrol91 extends Model
{
    use HasFactory;

    protected $filable = [
            'meter1',
            'meter2',
            'meter3',
            'meter4',
            'meter5',
            'meter6',   
    ]
}
