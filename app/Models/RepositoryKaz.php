<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepositoryKaz extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id'
            
    ];
    

    public function kaz(){
      $this->belongsTo(Kaz::class);
    }
}
