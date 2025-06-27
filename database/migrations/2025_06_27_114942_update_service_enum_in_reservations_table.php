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
        Schema::table('reservations', function (Blueprint $table) {
            $table->enum('service', [
                'BIM GEM et Modélisation',
                'Conseil et Formation',
                'BIM Management et Synthèse',
                'Facility Management',
                'BIM & DATA Management',
                'Le DOE BIM',
                'SCAN & Modélisation BIM',
                'Jumeaux Numériques',
                'Synthèse BIM',
                'CIM Management',
                'DATA Management',
                'Conseil & Accompagnement',
            ])->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->enum('service', [
                'BIM GEM et Modélisation',
                'Conseil et Formation',
                'BIM Management et Synthèse',
                'Facility Management',
            ])->change();
        });
    }
};
