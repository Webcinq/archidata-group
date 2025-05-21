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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->enum('service', [
                'BIM GEM et Modélisation',
                'Conseil et Formation', 
                'BIM Management et Synthèse',
                'Facility Management'
            ]);
            $table->date('date_service');
            $table->text('demande_speciale')->nullable();
            $table->enum('statut', ['en_attente', 'confirmee', 'annulee'])->default('en_attente');
            $table->timestamps();

            // Index pour améliorer les performances
            $table->index('email');
            $table->index('date_service');
            $table->index('statut');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};