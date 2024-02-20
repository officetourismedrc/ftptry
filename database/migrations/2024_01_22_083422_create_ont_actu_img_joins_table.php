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
        Schema::create('ont_actu_img_joins', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ont_actu_img_id')
            ->nullable()
            ->constrained(table:'ont_actu_imgs', indexName:'fk_ontImg')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreignId('ont_actu_art_id')
            ->nullable()
            ->constrained(table:'ont_actu_art', indexName:'fk_artImg')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->index(['ont_actu_img_id', 'ont_actu_art_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ont_actu_img_joins');
    }
};
