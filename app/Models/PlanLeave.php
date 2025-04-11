<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'nik',
        'employee_name',
        'jumlah_cuti',
        'dari_tanggal',
        'sampai_tanggal',
        'reason'
    ];
}