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
        Schema::create('troisiemnivs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->foreignId('decoupagecatg_id')
                  ->nullable()
                  ->constrained(table:'decoupagecatgs', indexName:'fk_decoupCatNiTrois_prov')
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
        Schema::dropIfExists('troisiemnivs');
    }
};
