<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'budget_amount',
        'description',
        'period'
    ];

    protected $casts = [
        'period' => 'date',
        'budget_amount' => 'decimal:2'
    ];
}