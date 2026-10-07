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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academy_team_id')
                ->constrained('academy_teams')
                ->cascadeOnDelete();
            $table->string('national_id', 10)->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->date('birth_date');
            $table->string('position');
            $table->string('preferred_foot');
            $table->unsignedInteger('jersey_number');
            $table->string('father_phone')->nullable();
            $table->string('mother_phone')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
