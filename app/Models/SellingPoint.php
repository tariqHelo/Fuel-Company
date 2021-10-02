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
           'price3',
           'note',
           'total',
           'user_id'
        ];
}
