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
        Schema::create('personnes', function (Blueprint $table) {
            Schema::dropIfExists('personnes');
            $table->id();
            $table->string('nom', 20);
            $table->string('dateNaissance');
            $table->text('lieuNaissance');
            $table->text('portrait');
            $table->text('age');
            $table->enum('sexe', ['H', 'F']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
