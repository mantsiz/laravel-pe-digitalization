<?php

use Egulias\EmailValidator\Result\Reason\Reason;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('improvement_activities', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal pengajuan');
            $table->string('nik');
            $table->integer('jumlah');
            $table->date('dari_tanggal');
            $table->date('sampai_tanggal')->nullable();
            $table->string('reason');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('improvement_activities');
    }
};