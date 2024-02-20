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
        Schema::create('infoessart_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('img_path');

            $table->string('title');
            $table->string('desc');

            $table->foreignId('infoessentielart_id')
            ->nullable()
            ->constrained(table:'infoessentielarts', indexName:'fk_ieart_infoEssArtImg')
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
        Schema::dropIfExists('infoessart_imgs');
    }
};
