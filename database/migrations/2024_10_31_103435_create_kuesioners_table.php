<?php
	
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_mahasiswa');
            $table->string('kode_pt');
            $table->string('tahun_lulus');
            $table->string('kode_prodi');
            $table->string('nama');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('nik');
            $table->string('linkedIn')->nullable();
            $table->string('status');
            $table->string('waktu_kerja')->nullable();
            $table->integer('bulan_dapat_kerja')->nullable();
            $table->decimal('pendapatan_perbulan', 12, 2)->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('jenis_instansi')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('posisi')->nullable();
            $table->string('tingkat_tempat_kerja')->nullable();
            $table->string('sumber_dana');
            $table->string('hubungan_bidang')->nullable();
            $table->string('tingkat_pendidikan')->nullable();
            
            // Kompetensi fields
            $table->integer('kompetensi_lulus_etika');
            $table->integer('kompetensi_kerja_etika')->nullable();
            $table->integer('kompetensi_lulus_keahlian');
            $table->integer('kompetensi_kerja_keahlian')->nullable();
            $table->integer('kompetensi_lulus_bahasa_inggris');
            $table->integer('kompetensi_kerja_bahasa_inggris')->nullable();
            $table->integer('kompetensi_lulus_teknologi');
            $table->integer('kompetensi_kerja_teknologi')->nullable();
            $table->integer('kompetensi_lulus_komunikasi');
            $table->integer('kompetensi_kerja_komunikasi')->nullable();
            $table->integer('kompetensi_lulus_kerjasama');
            $table->integer('kompetensi_kerja_kerjasama')->nullable();
            $table->integer('kompetensi_lulus_pengembangan_diri');
            $table->integer('kompetensi_kerja_pengembangan_diri')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kuesioners');
    }
} 