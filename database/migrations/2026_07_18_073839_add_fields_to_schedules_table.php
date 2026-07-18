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
        Schema::table('schedules', function (Blueprint $table) {
            $table->enum('event_type' , [
                'training',
                'match',
                'camp',
                'meeting',
                'test',
                'other',
            ])->default('training')->after('title');

            $table->enum('status' , [
                'confirmed',
                'pending',
                'cancelled'
            ])->default('confirmed')->after('event_type');

            $table->json('age_group')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropColumn([
                'event_type',
                'status',
                'age_group',
            ]);
        });
    }
};
