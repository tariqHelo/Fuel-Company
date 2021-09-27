<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository95 extends Model
{
    use HasFactory;
   protected $fillable = [
      'user_id'
            
    ];

    public function petrol95(){
      $this->belongsTo(Petrol95::class);
    }
}
