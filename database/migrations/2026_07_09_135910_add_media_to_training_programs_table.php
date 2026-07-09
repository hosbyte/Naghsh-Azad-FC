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
        Schema::table('training_programs', function (Blueprint $table) {
            if(!Schema::hasColumn('training_programs' , 'media_path'))
            {
                $table->string('media_path')->nullable();
            }

            if(!Schema::hasColumn('training_programs' , 'media_type'))
            {
                $table->string('media_type')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('training_programs', function (Blueprint $table) {
            $table->dropColumn(['media_path' , 'media_path']);
        });
    }
};
