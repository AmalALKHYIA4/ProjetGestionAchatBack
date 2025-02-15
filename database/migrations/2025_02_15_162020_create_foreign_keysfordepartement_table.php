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
        Schema::table('departements', function (Blueprint $table) {
            // Ajout de la colonne chef_id avec clé étrangère
            $table->unsignedBigInteger('chef_id')->nullable()->after('nom');
            $table->foreign('chef_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('departements', function (Blueprint $table) {
            $table->dropForeign(['chef_id']);
            $table->dropColumn('chef_id');
        });
    }
};
