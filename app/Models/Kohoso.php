<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kohoso extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'project_name', 'line', 'part'];
}