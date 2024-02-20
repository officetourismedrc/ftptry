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
        Schema::create('ont_actu_art', function (Blueprint $table) {
            $table->id();

            $table->string('title')->default('no title');

            $table->string('iconPath')
            ->nullable()
            ->default('no_data');

            $table->foreignId('auser_id')
            ->nullable()
            ->constrained(table:'ausers', indexName:'fk_ontActu_auser')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->string('adress');

            $table->string('qr_code');

            $table->boolean('content_switcher')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ont_actu_art');
    }
};
