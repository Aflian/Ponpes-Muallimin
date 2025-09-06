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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('no_hp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->string('ijazah_skl')->nullable();
            $table->string('akta_kelahiran')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('ktp_ortu')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('buku_rapor')->nullable();
            $table->string('surat_keterangan_sehat')->nullable();
            $table->string('surat_keterangan_berkelakuan_baik')->nullable();
            $table->string('formulir_pendaftaran')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
