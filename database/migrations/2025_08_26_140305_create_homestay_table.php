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
            $table->string('kluster');
            $table->string('no_fail');
            $table->string('nama_pengusaha');
            $table->string('no_kp');
            $table->string('no_tel');
            $table->string('alamat1_homestay');
            $table->string('alamat2_homestay');
            $table->string('poskod_homestay');
            $table->string('daerah_homestay');
            $table->string('negeri_homestay');
            $table->string('nama_kampung');
            $table->string('emel');
            $table->date('tarikh_daftar_homestay');
            $table->string('tarikh_semakan_semula_homestay');
            $table->string('jumlah_bilik');
            $table->string('catatan');
            $table->string('insurans');
            $table->string('pakej_produk');
            $table->string('alamat1_kgstay');
            $table->string('alamat2_kgstay');
            $table->string('poskod_kgstay');
            $table->string('daerah_kgstay');
            $table->string('negeri_kgstay');
            $table->string('nama_kampung_kgstay');
            $table->date('tarikh_daftar_kgstay');
            $table->string('tarikh_semakan_semula_kgstay');
            $table->string('jumlah_bilik_kgstay');
            $table->string('catatan_kgstay');

            $table->string('kategori');
            $table->string('nama_koperasi');
            $table->string('no_pendaftaran_koperasi');
            $table->string('pelaksanaan_akselerasi');
            $table->string('pra_pendaftaran_koperasi');

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
