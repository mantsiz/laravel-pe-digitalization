<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionResin3 extends Model
{
    use HasFactory;

    protected $table = 'production_resin3'; // Pastikan ini sesuai dengan nama tabel di database

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