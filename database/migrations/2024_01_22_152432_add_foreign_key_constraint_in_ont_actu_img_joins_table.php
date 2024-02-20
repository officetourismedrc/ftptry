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
        Schema::table('ont_actu_img_joins', function (Blueprint $table) {
            //
            $table->foreignId('ontartimg_cat_id')
            ->nullable()
            ->constrained(table:'ontartimg_cats', indexName:'fk_ontImgCat')
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ont_actu_img_joins', function (Blueprint $table) {
            //
            $table->dropForeign('ontartimg_cat_id');
            $table->dropColumn('ontartimg_cat_id');
        });
    }
};
