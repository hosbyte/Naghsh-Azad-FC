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
        Schema::create('academy_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('age_group_id')
                ->constrained('age_groups')
                ->cascadeOnDelete();
            $table->foreignId('coach_id')
                ->nullable()
                ->unique()
                ->constrained('coaches')
                ->nullOnDelete();
            $table->string('name');
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_teams');
    }
};
