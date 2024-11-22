<?php
	
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_mahasiswa')->nullable();
            $table->string('kode_pt')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->string('kode_prodi')->nullable();
            $table->string('nama')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('nik')->nullable();
            $table->string('linkedIn')->nullable();

            // Pekerjaan
            $table->string('status')->nullable();
            $table->string('waktu_kerja')->nullable();
            $table->integer('bulan_dapat_kerja')->nullable();
            $table->decimal('pendapatan_perbulan', 12, 2)->nullable()->default(0);
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('jenis_instansi')->nullable();
            $table->string('jenis_instansi_lainnya')->nullable();

            $table->string('nama_perusahaan')->nullable();
            $table->string('posisi')->nullable();
            $table->string('tingkat_tempat_kerja')->nullable();
            $table->string('sumber_dana')->nullable();
            $table->string('sumber_dana_lainnya')->nullable();

            $table->string('hubungan_bidang')->nullable();
            $table->string('tingkat_pendidikan')->nullable();
            
            // Kompetensi fields
            $table->integer('kompetensi_lulus_etika')->nullable();
            $table->integer('kompetensi_lulus_keahlian')->nullable();
            $table->integer('kompetensi_lulus_bahasa_inggris')->nullable();
            $table->integer('kompetensi_lulus_teknologi')->nullable();
            $table->integer('kompetensi_lulus_komunikasi')->nullable();
            $table->integer('kompetensi_lulus_kerjasama')->nullable();
            $table->integer('kompetensi_lulus_pengembangan_diri')->nullable();

            
            $table->integer('kompetensi_kerja_etika')->nullable();
            $table->integer('kompetensi_kerja_keahlian')->nullable();
            $table->integer('kompetensi_kerja_bahasa_inggris')->nullable();
            $table->integer('kompetensi_kerja_teknologi')->nullable();
            $table->integer('kompetensi_kerja_komunikasi')->nullable();
            $table->integer('kompetensi_kerja_kerjasama')->nullable();
            $table->integer('kompetensi_kerja_pengembangan_diri')->nullable();


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kuesioners');
    }
};