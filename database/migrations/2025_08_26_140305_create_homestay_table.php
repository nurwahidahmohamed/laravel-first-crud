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
        Schema::create('homestays', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pengusaha');
            $table->string('jantina');
            $table->string('no_kp');
            $table->string('no_tel');
            $table->string('alamat');
            $table->string('jumlah_bilik');
            $table->string('catatan');
            $table->string('insurans');
            $table->string('pakej_produk');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homestay');
    }
};
