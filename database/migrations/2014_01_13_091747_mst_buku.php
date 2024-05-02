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
        Schema::create('mst_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('jumlah_halaman');
            $table->string('thn_terbit');
            $table->string('penulis');
            $table->string('quantity');
            $table->string('status')->nullable;
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
