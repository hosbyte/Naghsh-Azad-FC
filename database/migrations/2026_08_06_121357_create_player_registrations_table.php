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
        Schema::create('player_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('mother_phone');
            $table->date('barth_date');
            $table->string('position');
            $table->string('foot');
            $table->string('status')->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_registrations');
    }
};
