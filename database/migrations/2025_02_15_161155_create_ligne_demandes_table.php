<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lignes_demandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('demande_id');
            $table->unsignedBigInteger('produit_id')->nullable();
            $table->string('designation');
            $table->integer('quantite');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignes_demandes');
    }
};
