<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GorikaImprovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'category',
        'rank',
        'field_division',
        'division',
        'gm',
        'department',
        'manager',
        'pic',
        'detail_activity',
        'month',
        'monthly',
        'effect_period',
        'yearly',
        'category_pl_impact',
        'c',
        'continue_current_model',
        'continue_new_model',
    ];
}