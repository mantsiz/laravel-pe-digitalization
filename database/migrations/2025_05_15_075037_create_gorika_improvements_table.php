<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gorika_improvements', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('category');
            $table->string('rank');
            $table->string('field_division');
            $table->string('division');
            $table->string('gm');
            $table->string('department');
            $table->string('manager');
            $table->string('pic');
            $table->text('detail_activity');
            $table->string('month');
            $table->decimal('monthly', 15, 2);
            $table->string('effect_period');
            $table->decimal('yearly', 15, 2);
            $table->string('category_pl_impact');
            $table->string('c')->nullable();
            $table->boolean('continue_current_model')->default(false);
            $table->boolean('continue_new_model')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gorika_improvements');
    }
};