<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepositoryDiesel extends Model
{
    use HasFactory;



    public function diesel(){
      $this->belongsTo(Diesel::class);
    }
}
