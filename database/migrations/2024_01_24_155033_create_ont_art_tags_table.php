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
        Schema::create('ont_art_tags', function (Blueprint $table) {
            $table->id();

            $table->foreignId('site_tag_id')
            ->nullable()
            ->constrained(table:'site_tags', indexName:'fk_ontSiteTag')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreignId('ont_actu_art_id')
            ->nullable()
            ->constrained(table:'ont_actu_art', indexName:'fk_artTag')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->index(['site_tag_id', 'ont_actu_art_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ont_art_tags');
    }
};
