<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;
      protected $fillable = [
        'petrol91_id',
        'kaz_id',
        'diesel_id',
        'petrol95_id',
        'hasyna_id',
        'total',
        'delay_id',
        'clear',
        'water_id',
        'actitvity_id',
        'total_actitvity',
        'cash',
        'bank_id',
        'atm',
        'Total_cash_and_cash',
        'balance',
        'user_id'
      ];

    public function petrol91(){
      $this->belongsTo(Petrol91::class);
    }
    public function petrol95(){
      $this->belongsTo(Petrol95::class);
    }
    public function diesel(){
      $this->belongsTo(Diesel::class);
    }
    public function kaz(){
      $this->belongsTo(Kaz::class);
    }
    public function hasyna(){
      $this->belongsTo(Hesnya::class);
    }
    public function delay(){
      $this->belongsTo(Delay::class);
    }
    public function water(){
      $this->belongsTo(Water::class);
    }
    public function actitvity(){
      $this->belongsTo(Activities::class);
    }
    public function bank(){
      $this->belongsTo(Bank::class);
    }
}
