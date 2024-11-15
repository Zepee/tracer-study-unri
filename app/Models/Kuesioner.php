<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $table = 'kuesioners';

    protected $primaryKey = 'id';

    use HasFactory;

    protected $fillable = [
        'nomor_mahasiswa',
        'kode_pt',
        'tahun_lulus',
        'kode_prodi',
        'nama',
        'nomor_telepon',
        'email',
        'nik',
        'linkedIn',

        // Pekerjaan
        'status',
        'waktu_kerja',
        'bulan_dapat_kerja',
        'pendapatan_perbulan',
        'provinsi',
        'kota',
        'jenis_instansi',
        'jenis_instansi_lainnya',

        'nama_perusahaan',
        'posisi',
        'tingkat_tempat_kerja',
        'sumber_dana',
        'sumber_dana_lainnya',
        'hubungan_bidang',
        'tingkat_pendidikan',

        // Kompetensi fields
        'kompetensi_lulus_etika',
        'kompetensi_kerja_etika',
        'kompetensi_lulus_keahlian',
        'kompetensi_kerja_keahlian',
        'kompetensi_lulus_bahasa_inggris',
        'kompetensi_kerja_bahasa_inggris',
        'kompetensi_lulus_teknologi',
        'kompetensi_kerja_teknologi',
        'kompetensi_lulus_komunikasi',
        'kompetensi_kerja_komunikasi',
        'kompetensi_lulus_kerjasama',
        'kompetensi_kerja_kerjasama',
        'kompetensi_lulus_pengembangan_diri',
        'kompetensi_kerja_pengembangan_diri',
    ];

    // Tambahkan casting untuk field decimal
    protected $casts = [
        'pendapatan_perbulan' => 'decimal:2',
    ];

    // Tambahkan konstanta untuk nilai status
    const STATUS_BEKERJA = 'bekerja';
    const STATUS_TIDAK_BEKERJA = 'tidak_bekerja';
}
