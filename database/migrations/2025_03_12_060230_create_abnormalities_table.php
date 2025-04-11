<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('abnormalities', function (Blueprint $table) {
            $table->id();
            $table->string('mc_no'); // Nomor mesin
            $table->string('part_name'); // Nama part
            $table->text('abnormal'); // Deskripsi abnormalitas
            $table->string('factory'); // Lokasi pabrik
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abnormalities');
    }
};