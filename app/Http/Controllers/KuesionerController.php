<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    public function create()
    {
        return view('kuesioner.kuesioner');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nomor_mahasiswa' => 'required',
            'kode_pt' => 'required',
            'tahun_lulus' => 'required',
            'kode_prodi' => 'required',
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'nik' => 'required',
            'linkedIn' => 'nullable',
            'status' => 'required',
            'waktu_kerja' => 'required_if:status,1,3',
            'bulan_dapat_kerja' => 'required_if:waktu_kerja,ya',
            'pendapatan_perbulan' => 'required_if:waktu_kerja,ya',
            'provinsi' => 'required_if:status,1,3',
            'kota' => 'required_if:status,1,3',
            'jenis_instansi' => 'required_if:status,1,3',
            'nama_perusahaan' => 'required_if:status,1,3',
            'posisi' => 'required_if:status,3',
            'tingkat_tempat_kerja' => 'required_if:status,1,3',
            'sumber_dana' => 'required',
            'hubungan_bidang' => 'required_if:status,1,3',
            'tingkat_pendidikan' => 'required_if:status,1,3',
            // Validasi kompetensi
            'kompetensi_lulus_etika' => 'required',
            'kompetensi_kerja_etika' => 'required_if:status,1,3',
            'kompetensi_lulus_keahlian' => 'required',
            'kompetensi_kerja_keahlian' => 'required_if:status,1,3',
            'kompetensi_lulus_bahasa_inggris' => 'required',
            'kompetensi_kerja_bahasa_inggris' => 'required_if:status,1,3',
            'kompetensi_lulus_teknologi' => 'required',
            'kompetensi_kerja_teknologi' => 'required_if:status,1,3',
            'kompetensi_lulus_komunikasi' => 'required',
            'kompetensi_kerja_komunikasi' => 'required_if:status,1,3',
            'kompetensi_lulus_kerjasama' => 'required',
            'kompetensi_kerja_kerjasama' => 'required_if:status,1,3',
            'kompetensi_lulus_pengembangan_diri' => 'required',
            'kompetensi_kerja_pengembangan_diri' => 'required_if:status,1,3',
        ]);

        try {
            // Simpan data ke database
            Kuesioner::create($validated);
            
            // Redirect ke halaman sukses
            return redirect()
                ->route('kuesioner.success')
                ->with('success', 'Terima kasih telah mengisi kuesioner!');
        } catch (\Exception $e) {
            // Jika terjadi error, kembali ke form dengan pesan error
            return back()
                ->withInput()
                ->withErrors(['error' => 'Terjadi kesalahan. Silakan coba lagi.']);
        }
    }

    public function success()
    {
        return view('kuesioner.success');
    }
}
