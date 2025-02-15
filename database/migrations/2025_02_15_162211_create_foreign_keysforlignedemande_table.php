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
        Schema::table('lignes_demandes', function (Blueprint $table) {
            // Ajout des clés étrangères
            $table->foreign('demande_id')->references('id')->on('demandes')->onDelete('cascade');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lignes_demandes', function (Blueprint $table) {
            $table->dropForeign(['demande_id']);
            $table->dropForeign(['produit_id']);
        });
    }
};
