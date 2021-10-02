<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionBank extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank_id',
        'total',
        'price',
        'note',
        'user_id'

    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function sum()
    {
      $sum = TransactionBank::sum('price');
       
      return $sum;
     // dd($sum);
    }

}
