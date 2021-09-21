<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionSellingPoints extends Model
{
    use HasFactory;
     protected $fillable = [
        'selling_id',
        'total',
        'price'
     ];

    public function selling()
    {
        return $this->belongsTo(SellingPoint::class);
    }
}
