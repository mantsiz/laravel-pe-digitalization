<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('plan_leaves', function (Blueprint $table) {
            $table->id();
            $table->string('nik'); 
            $table->string('employee_name'); // Pastikan ini ada
            $table->integer('jumlah_cuti');
            $table->date('dari_tanggal');
            $table->date('sampai_tanggal');
            $table->string('reason');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('plan_leaves');
    }
};