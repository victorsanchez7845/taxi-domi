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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();

            // Contenido base
            $table->string('title');
            $table->string('slug')->unique();

            // Idioma y relación entre traducciones
            $table->string('language', 5)->default('en'); // en / es
            $table->unsignedBigInteger('group_id')->nullable();

            // Publicación
            $table->boolean('is_published')->default(true);

            // Contenido
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Diferencias vs blog
            $table->decimal('rating', 2, 1)->nullable(); // 0.0 a 5.0
            $table->string('price_range', 10)->nullable(); // $, $$, $$$, $$$$
            $table->string('tag')->nullable(); // luxury, budget, boutique, etc.

            // Ubicación
            $table->string('address')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();

            $table->timestamps();

            // Índices útiles
            $table->index('language');
            $table->index('group_id');
            $table->index('is_published');
            $table->index('tag');
            $table->index('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};