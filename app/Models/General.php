<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;
     protected $fillable = [
          'type',
          'name',
          'price1',
          'price2',
          'price3',
          'note',
          'total',
          'user_id'
        ];
}
