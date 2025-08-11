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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug')->unique();
            $table->text('description_courte');
            $table->longText('contenu');
            $table->string('image')->nullable();
            $table->string('secteur_activite')->nullable(); 
            $table->json('hashtags')->nullable(); 
            $table->boolean('actif')->default(true);
            $table->boolean('featured')->default(false); 
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->timestamp('date_publication')->nullable();
            $table->timestamps();

            $table->index('slug');
            $table->index('secteur_activite');
            $table->index('actif');
            $table->index('featured');
            $table->index('date_publication');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};