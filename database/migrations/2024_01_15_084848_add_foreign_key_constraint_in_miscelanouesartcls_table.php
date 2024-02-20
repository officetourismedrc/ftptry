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
        Schema::table('miscelanouesartcls', function (Blueprint $table) {
            //
            $table->foreignId('articlecatg_id')
            ->nullable()
            ->constrained(table:'articlecatgs', indexName:'fk_articat_miscart')
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('miscelanouesartcls', function (Blueprint $table) {
            //
            $table->dropForeign('articlecatg_id');
            $table->dropColumn('articlecatg_id');
        });
    }
};
