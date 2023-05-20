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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tiket')->nullable();
            $table->string('subject')->nullable();
            $table->longText('pertanyaan')->nullable();
            $table->string('tiket_st')->nullable();
            $table->string('path_file_pertanyaan')->nullable();
            $table->integer('creator_id')->nullable();
            $table->longText('jawaban')->nullable();
            $table->string('path_file_jawaban')->nullable();
            $table->integer('penjawab_id')->nullable();
            $table->dateTime('tanggal_jawab')->nullable();
            $table->integer('irban_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
