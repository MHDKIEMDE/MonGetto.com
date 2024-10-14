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
        Schema::create('propriete_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propriete_id')->constrained()->onDelete('cascade');
            $table->string('url'); // Assurez-vous que ce champ contient le chemin de l'image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propriete_images');
    }
};