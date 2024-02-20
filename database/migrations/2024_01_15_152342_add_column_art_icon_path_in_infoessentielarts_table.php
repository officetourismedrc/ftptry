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
        Schema::table('infoessentielarts', function (Blueprint $table) {
            //
            $table->string('iconPath')
                  ->nullable()
                  ->default('no_data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('infoessentielarts', function (Blueprint $table) {
            //
            $table->dropColumn('iconPath');
        });
    }
};
