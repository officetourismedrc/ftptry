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
        Schema::create('ont_a_metadatas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ont_actu_art_id')
            ->nullable()
            ->constrained(table:'ont_actu_art', indexName:'fk_ontArtMeta')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('ont_a_metadata_id')
            ->nullable()
            ->constrained(table:'ont_a_metadatas', indexName:'fk_ont_a_self')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ont_a_metadatas');
    }
};
