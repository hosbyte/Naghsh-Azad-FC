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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academy_team_id')
                ->constrained('academy_teams')
                ->cascadeOnDelete();
            $table->foreignId('player_id')
                ->constrained('players')
                ->cascadeOnDelete();
            $table->date('attendance_date');
            $table->string('status');
            $table->unsignedInteger('late_minutes')->default(0);
            $table->foreignId('recorded_by')
                ->constrained('users')
                ->restrictOnDelete();
            $table->timestamps();

            $table->unique([
                'academy_team_id',
                'player_id',
                'attendance_date',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
