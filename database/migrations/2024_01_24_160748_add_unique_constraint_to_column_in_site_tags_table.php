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
        Schema::table('site_tags', function (Blueprint $table) {
            //
            $table->unique('name', 'unique_site_tags_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_tags', function (Blueprint $table) {
            //
            $table->dropUnique('unique_site_tags_name');
        });
    }
};
