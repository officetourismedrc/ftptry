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
        Schema::create('ont_paragraphs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ont_a_metadata_id')
            ->nullable()
            ->constrained(table:'ont_a_metadatas', indexName:'fk_ont_paragraf')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->longText('desc')->default('paragraph content')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ont_paragraphs');
    }
};
