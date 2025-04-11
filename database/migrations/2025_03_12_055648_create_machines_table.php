<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('mc_no')->unique();
            $table->string('part_name');
            $table->string('factory'); // Kolom yang digunakan dalam query
            $table->enum('status', ['normal', 'abnormal']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('machines');
    }
};