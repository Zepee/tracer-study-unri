<x-layout>
    <x-slot name="header">
        Halaman Kuesioner Tracer Study
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kuesioner Tracer Study</h4>
                    <p class="card-text">Silakan isi kuesioner di bawah ini untuk membantu kami meningkatkan kualitas pendidikan.</p>
                    
                    <form action="{{ route('kuesioner') }}" method="POST">
                        @csrf
                        
                        <!-- Bagian 1: Identitas Responden -->
                        <h5 class="mt-4">A. Identitas Responden</h5>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" required>
                        </div>
                        <div class="mb-3">
                            <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                            <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" required>
                        </div>
                        
                        <!-- Bagian 2: Pekerjaan -->
                        <h5 class="mt-4">B. Pekerjaan</h5>
                        <div class="mb-3">
                            <label for="status_pekerjaan" class="form-label">Status Pekerjaan Saat Ini</label>
                            <select class="form-select" id="status_pekerjaan" name="status_pekerjaan" required>
                                <option value="">Pilih status pekerjaan</option>
                                <option value="bekerja">Bekerja</option>
                                <option value="wiraswasta">Wiraswasta</option>
                                <option value="melanjutkan_pendidikan">Melanjutkan Pendidikan</option>
                                <option value="belum_bekerja">Belum Bekerja</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan/Institusi</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                        </div>
                        <div class="mb-3">
                            <label for="posisi" class="form-label">Posisi/Jabatan</label>
                            <input type="text" class="form-control" id="posisi" name="posisi">
                        </div>
                        
                        <!-- Bagian 3: Kesesuaian Pendidikan -->
                        <h5 class="mt-4">C. Kesesuaian Pendidikan</h5>
                        <div class="mb-3">
                            <label class="form-label">Seberapa erat hubungan antara bidang studi dengan pekerjaan Anda?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kesesuaian_pendidikan" id="sangat_erat" value="sangat_erat" required>
                                <label class="form-check-label" for="sangat_erat">Sangat Erat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kesesuaian_pendidikan" id="erat" value="erat">
                                <label class="form-check-label" for="erat">Erat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kesesuaian_pendidikan" id="cukup_erat" value="cukup_erat">
                                <label class="form-check-label" for="cukup_erat">Cukup Erat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kesesuaian_pendidikan" id="kurang_erat" value="kurang_erat">
                                <label class="form-check-label" for="kurang_erat">Kurang Erat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kesesuaian_pendidikan" id="tidak_erat" value="tidak_erat">
                                <label class="form-check-label" for="tidak_erat">Tidak Erat</label>
                            </div>
                        </div>
                        
                        <!-- Bagian 4: Saran dan Masukan -->
                        <h5 class="mt-4">D. Saran dan Masukan</h5>
                        <div class="mb-3">
                            <label for="saran" class="form-label">Berikan saran atau masukan untuk pengembangan program studi:</label>
                            <textarea class="form-control" id="saran" name="saran" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-3">Kirim Kuesioner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>