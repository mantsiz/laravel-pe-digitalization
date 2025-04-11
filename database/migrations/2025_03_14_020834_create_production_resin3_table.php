<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('production_resin3', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal_pengajuan');
        $table->string('nik');
        $table->string('nama_karyawan');
        $table->integer('jumlah');
        $table->date('dari_tanggal');
        $table->date('sampai_tanggal');
        $table->text('reason');
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('production_resin3');
    }
};
