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
        Schema::create('films', function (Blueprint $table) {
            Schema::dropIfExists('films');
            $table->id();
            $table->string('titre', 100);
            $table->text('resume');
            $table->text('affiche');
            $table->text('duree');
            $table->unsignedBigInteger('realisateur_id');
            $table->foreign('realisateur_id')->references('id')->on('personnes');
            $table->unsignedBigInteger('producteur_id');
            $table->foreign('producteur_id')->references('id')->on('personnes');
            $table->integer('annee');
            $table->text('cote');
            $table->text('categorie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
