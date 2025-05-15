<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('part_name');
            $table->enum('part_type', [
                'FR BUMPER [D-STD]',
                'FR BUMPER [T-HI]',
                'RR BUMPER [STD]',
                'RR BUMPER [T-HI]',
                'COVER FR BUMPER [T-STD]',
                'MOULDING, BODY ROCKER PANEL RH/LH [T-HI]',
                'GUARD, FR BUMPER (AERO)',
                'GUARD, RR BUMPER (AERO)',
                'PLATE, RR BUMPER RH (AERO)',
                'MOULDING, QUARTER WINDOW, OUTSIDE',
                'MOULDING, QUARTER WINDOW, OUTSIDE [T-HI]',
                'MOULDING, FR BUMPER SIDE, RH/LH [T-STD]',
                'MOULDING, FR BUMPER SIDE, RH/LH [T-HI]',
                'MOULDING, FR BUMPER EXTENSION, RH/LH (AERO)',
                'GARNISH S/A RADIATOR GRILLE'
            ]);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parts');
    }
}