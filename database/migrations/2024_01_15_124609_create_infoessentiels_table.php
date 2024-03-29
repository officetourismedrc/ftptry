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
        Schema::create('infoessentiels', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->foreignId('miscellaneou_id')
                 ->nullable()
                 ->constrained(table:'miscellaneous', indexName:'fk_misc_infoess')
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
        Schema::dropIfExists('infoessentiels');
    }
};
