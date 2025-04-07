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
        Schema::table('products', function (Blueprint $table) {
            // Exemple : rendre le champ slug plus court (100 caractères max)
            $table->string('slug', 100)->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Revenir à la longueur d'origine (255 caractères par défaut)
            $table->string('slug', 255)->unique()->change();
        });
    }
};
