<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('master_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('schedule_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_schedules');
    }
}