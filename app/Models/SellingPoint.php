<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellingPoint extends Model
{
    use HasFactory;
        protected $fillable = [
        // 'name',
        // 'status'
           'price1',
           'price2',
           'total',
           'user_id'
        ];
}
