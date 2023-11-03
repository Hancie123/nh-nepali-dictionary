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
        Schema::create('dictionaries', function (Blueprint $table) {
            $table->id();
            $table->string('Words')->nullable();
            $table->longText('Meaning')->nullable();
            $table->longText('Meaning in Nepali')->nullable();
            $table->longText('Antonym')->nullable();
            $table->longText('Synonym')->nullable();
            $table->longText('Sentences')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dictionaries');
    }
};
