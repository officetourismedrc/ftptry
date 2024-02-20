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
        Schema::table('deuxniveaus', function (Blueprint $table) {
            //
            $table->foreignId('province_id')
            ->nullable()
            ->constrained(table:'provinces', indexName:'fk_deuxn_provi')
            ->onDelete('set null')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deuxniveaus', function (Blueprint $table) {
            //
            $table->dropForeign('province_id');
            $table->dropColumn('province_id');
        });
    }
};
