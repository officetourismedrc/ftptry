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
        Schema::table('provarts', function (Blueprint $table) {
            //
            $table->unsignedTinyInteger('priority')->nullable();
            $table->boolean('display_it')->default(false);
            $table->bigInteger('clicks')->default(0);
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('provarts', function (Blueprint $table) {
            //
            $table->dropColumn('priority');
            $table->dropColumn('display_it');
            $table->dropColumn('clicks');
        });
    }
};
