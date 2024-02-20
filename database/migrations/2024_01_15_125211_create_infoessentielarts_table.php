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
        Schema::create('infoessentielarts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('no title');

            $table->foreignId('infoessentiel_id')
            ->nullable()
            ->constrained(table:'infoessentiels', indexName:'fk_infoEss_infoEssArt')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreignId('articlecatg_id')
            ->nullable()
            ->constrained(table:'articlecatgs', indexName:'fk_articat_infoEssArt')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreignId('auser_id')
            ->nullable()
            ->constrained(table:'ausers', indexName:'fk_auser_infoEssArt')
            ->onDelete('set null')
            ->onUpdate('cascade');

            
            $table->string('adress');

            $table->string('qr_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infoessentielarts');
    }
};
