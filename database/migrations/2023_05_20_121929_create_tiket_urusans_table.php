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
        Schema::create('tiket_urusans', function (Blueprint $table) {
            $table->id();
            $table->integer('tiket_id')->nullable();
            $table->integer('creator_id')->nullable();
            $table->longText('keterangan')->nullable();
            $table->string('tiket_status_st')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_urusans');
    }
};
