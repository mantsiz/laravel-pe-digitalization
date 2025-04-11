<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImprovementActivity extends Model
{
    use HasFactory;

    protected $table = 'improvement_activities'; // Pastikan ini sesuai dengan nama tabel di database

    protected $fillable = [
        'tanggal_pengajuan',
        'nik',
        'nama_karyawan',
        'jumlah',
        'dari_tanggal',
        'sampai_tanggal',
        'reason'
    ];
}