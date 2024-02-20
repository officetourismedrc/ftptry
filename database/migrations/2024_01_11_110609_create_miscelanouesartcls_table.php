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
        Schema::create('miscelanouesartcls', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('no title');

            $table->foreignId('miscellaneou_id')
            ->nullable()
            ->constrained(table:'miscellaneous', indexName:'fk_misc_miscArt')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreignId('auser_id')
            ->nullable()
            ->constrained(table:'ausers', indexName:'fk_auser_miscArt')
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
        Schema::dropIfExists('miscelanouesartcls');
    }
};
