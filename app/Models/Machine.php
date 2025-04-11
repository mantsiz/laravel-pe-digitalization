<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $table = 'machines'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['name', 'status', 'category'];
}