<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abnormality extends Model
{
    use HasFactory;

    protected $table = 'abnormalities'; // Nama tabel di database
    protected $fillable = ['mc_no', 'part_name', 'abnormal', 'factory'];
}