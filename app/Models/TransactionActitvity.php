<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionActitvity extends Model
{
    use HasFactory;

    protected $fillable = [
        'actitvity_id',
        'total',
        'price',
        'note',
        'user_id'
    ];

    public function actitvity()
    {
        return $this->belongsTo(Activities::class);
    }
}
