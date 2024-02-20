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
        Schema::create('ont_actu_imgs', function (Blueprint $table) {
            $table->id();

            $table->string('img_path');
            $table->string('title');
            $table->string('desc');
            $table->string('author')->default('no_specified');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ont_actu_imgs');
    }
};
