<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionActitvity extends Model
{
    use HasFactory;

    protected $fillable = [
    'actitvity_id',
    'total'
    ];
}
