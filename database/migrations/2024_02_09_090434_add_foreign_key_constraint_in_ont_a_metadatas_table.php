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
        Schema::table('ont_a_metadatas', function (Blueprint $table) {
            //

            $table->foreignId('ont_a_catmetas_id')
            ->nullable()
            ->constrained(table:'ont_a_catmetas', indexName:'fk_ontmetascat')
            ->onDelete('set null')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ont_a_metadatas', function (Blueprint $table) {
            //
            $table->dropForeign('ont_a_catmetas_id');
            $table->dropColumn('ont_a_catmetas_id');
        });
    }
};
