<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository91 extends Model
{
    use HasFactory;


    public function petrol91(){
      $this->belongsTo(Petrol91::class);
    }
}
