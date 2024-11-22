<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    public function getKuesionerView()
    {
        return view('kuesioner.kuesioner');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validasi input
        $validated = $request->validate([
            'nomor_mahasiswa' => 'nullable',
            'kode_pt' => 'nullable',
            'tahun_lulus' => 'nullable',
            'kode_prodi' => 'nullable',
            'nama' => 'nullable',
            'nomor_telepon' => 'nullable',
            'email' => 'nullable|email',
            'nik' => 'nullable',
            'linkedIn' => 'nullable',
            'status' => 'nullable|in:bekerja,tidak_bekerja',
            'waktu_kerja' => 'nullable|required_if:status,bekerja',
            'bulan_dapat_kerja' => 'nullable|required_if:waktu_kerja,ya',
            'pendapatan_perbulan' => 'nullable|required_if:waktu_kerja,ya',
            'provinsi' => 'nullable|required_if:status,bekerja',
            'kota' => 'nullable|required_if:status,bekerja',
            'jenis_instansi' => 'nullable|required_if:status,bekerja',
            'jenis_instansi_lainnya' => 'nullable|required_if:jenis_instansi,5',

            'nama_perusahaan' => 'nullable|required_if:status,1,3',
            'posisi' => 'nullable|required_if:status,3',
            'tingkat_tempat_kerja' => 'nullable|required_if:status,1,3',
            'sumber_dana' => 'nullable',
            'sumber_dana_lainnya' => 'nullable|required_if:sumber_dana,7',

            'hubungan_bidang' => 'nullable',
            
            'kompetensi_lulus_komunikasi' => 'nullable',
            'kompetensi_lulus_kerjasama' => 'nullable',
            'kompetensi_lulus_pengembangan_diri' => 'nullable',
            'kompetensi_lulus_etika' => 'nullable',
            'kompetensi_lulus_keahlian' => 'nullable',
            'kompetensi_lulus_bahasa_inggris' => 'nullable',
            'kompetensi_lulus_teknologi' => 'nullable',


            'kompetensi_kerja_komunikasi' => 'nullable|required_if:status,1,3',
            'kompetensi_kerja_kerjasama' => 'nullable|required_if:status,1,3',
            'kompetensi_kerja_pengembangan_diri' => 'nullable|required_if:status,1,3',
            'kompetensi_kerja_etika' => 'nullable|required_if:status,bekerja',
            'kompetensi_kerja_keahlian' => 'nullable|required_if:status,bekerja',
            'kompetensi_kerja_bahasa_inggris' => 'nullable|required_if:status,bekerja',
            'kompetensi_kerja_teknologi' => 'nullable|required_if:status,bekerja',
        ]);

        Kuesioner::create($validated);

        return redirect()->route('pengumuman')->with('success', 'Terima kasih telah mengisi kuesioner!');
    }
}
