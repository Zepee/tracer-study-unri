<x-layout>
    <x-slot name="header">
        Kuesioner Tracer Study
    </x-slot>

    <style>
        /* Container & Card Styling */

        .card {
            background: #fff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .card-header {
            background: linear-gradient(135deg, #198754 0%, #20c997 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 15px 15px 0 0 !important;
            border-bottom: none;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 30px;
        }

        /* Form Elements */
        .form-label {
            font-weight: 500;
            color: #344767;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-control,
        .form-select {
            padding: 10px 15px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.15);
        }

        /* Radio & Checkbox */
        .form-check {
            margin-bottom: 8px;
            padding-left: 28px;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            margin-left: -28px;
            cursor: pointer;
        }

        .form-check-label {
            cursor: pointer;
            font-size: 0.95rem;
            color: #495057;
        }

        /* Section Headers */
        h5 {
            color: #198754;
            font-weight: 600;
            padding-bottom: 10px;
            margin: 25px 0 20px;
            border-bottom: 2px solid #e9ecef;
        }

        /* Table Styling */
        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #e9ecef;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #344767;
            text-align: center;
            padding: 12px;
            font-size: 0.9rem;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
            padding: 12px 8px;
        }

        .table td input[type="radio"] {
            margin: 0;
            position: relative;
            top: 2px;
        }

        .table td:first-child {
            text-align: left;
        }

        /* Button */
        .btn-primary {
            padding: 12px 30px;
            font-weight: 500;
            border-radius: 8px;
            background: linear-gradient(135deg, #198754 0%, #20c997 100%);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.2);
        }



        /* Responsive */
        @media (max-width: 768px) {
            .card-body {
                padding: 20px;
            }

            .form-label {
                font-size: 0.9rem;
            }

            .table th,
            .table td {
                font-size: 0.85rem;
                padding: 8px;
            }
        }

        /* Hidden Sections */
        #waktuKerjaSection,
        #detailWaktuKerja {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 15px;
        }

        /* Validation States */
        .was-validated .form-control:valid {
            border-color: #198754;
            background-color: #f8fff9;
        }

        .was-validated .form-control:invalid {
            border-color: #dc3545;
            background-color: #fff8f8;
        }

        /* Progress Indicator */
        .form-section {
            position: relative;
            padding-left: 20px;
        }

        .form-section::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: #e9ecef;
            border-radius: 4px;
        }

        .form-section.active::before {
            background: linear-gradient(135deg, #198754 0%, #20c997 100%);
        }

        /* Form Check Input */
        .form-check-input:checked {
            background-color: #198754;
            border-color: #198754;
        }
    </style>

    <div class="">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title fw-bold text-white mb-0">Form Kuesioner Alumni</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('kuesioner.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf

                    <!-- Identitas -->
                    <div class="form-section active mb-4">
                        <h5>Identitas</h5>
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">1. Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">2. Nomor Induk Mahasiswa</label>
                                <input type="text" class="form-control" name="nomor_mahasiswa">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">3. Tahun Lulus</label>
                                <input type="text" class="form-control" name="tahun_lulus">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">4. Nomor Telepon/HP</label>
                                <input type="text" class="form-control" name="nomor_telepon">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">5. Alamat Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">6. LinkedIn</label>
                                <input type="text" class="form-control" name="linkedIn">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">7. Kode PT</label>
                                <input type="text" class="form-control" name="kode_pt" value="001017" readonly>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">8. Kode Prodi</label>
                                <input type="text" class="form-control" name="kode_prodi" value="131028" readonly>
                            </div>

                            {{-- <div class="col-md-6">
                                <label class="form-label">9. NIK</label>
                                <input type="text" class="form-control" name="nik" required>
                            </div> --}}

                        </div>
                    </div>

                    <!-- Status Saat Ini -->
                    <div class="form-section mb-4">
                        <h5>Pekerjaan</h5>
                        <div class="mb-3">
                            <label class="form-label">10. Jelaskan status Anda saat ini?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="bekerja">
                                <label class="form-check-label">Bekerja</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="tidak_bekerja">
                                <label class="form-check-label">Tidak Bekerja</label>
                            </div>
                        </div>

                        <!-- Container untuk pertanyaan 11-16 -->
                        <div id="pertanyaanPekerjaan" style="display: none;">
                            <!-- Pertanyaan 11 -->
                            <div class="mb-3">
                                <label class="form-label">11. Apakah anda telah mendapatkan pekerjaan <= 6 bulan /
                                        termasuk bekerja sebelum lulus?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="waktu_kerja"
                                                value="ya">
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="waktu_kerja"
                                                value="tidak">
                                            <label class="form-check-label">Tidak</label>
                                        </div>

                                        <div class="mt-2" id="detailWaktuKerja">
                                            <div class="mb-2">
                                                <label class="form-label">Dalam berapa bulan anda mendapatkan
                                                    pekerjaan?</label>
                                                <input type="number" class="form-control" name="bulan_dapat_kerja">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Berapa rata-rata pendapatan anda per
                                                    bulan? (take home pay)?</label>
                                                <input type="number" class="form-control" name="pendapatan_perbulan">
                                            </div>
                                        </div>
                            </div>

                            <!-- Pertanyaan 12 -->
                            <div class="mb-3">
                                <label class="form-label">12. Dimana lokasi tempat Anda bekerja?</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-select" name="provinsi">
                                            <option value="">Pilih Provinsi</option>
                                            <!-- Tambahkan opsi provinsi -->
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select" name="kota">
                                            <option value="">Pilih Kabupaten/Kota</option>
                                            <!-- Tambahkan opsi kota -->
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Pertanyaan 13 -->
                            <div class="mb-3">
                                <label class="form-label">13. Apa jenis perusahaan/instansi/institusi tempat anda
                                    bekerja sekarang?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_instansi" value="1">
                                    <label class="form-check-label">Instansi pemerintah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_instansi"
                                        value="6">
                                    <label class="form-check-label">BUMN/BUMD</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_instansi"
                                        value="7">
                                    <label class="form-check-label">Institusi/Organisasi Multilateral</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_instansi"
                                        value="2">
                                    <label class="form-check-label">Organisasi non-profit/Lembaga Swadaya
                                        Masyarakat</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_instansi"
                                        value="3">
                                    <label class="form-check-label">Perusahaan swasta</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_instansi"
                                        value="4">
                                    <label class="form-check-label">Wiraswasta/perusahaan sendiri</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_instansi"
                                        value="5">
                                    <label class="form-check-label">Lainnya, tuliskan:</label>
                                    <input type="text" class="form-control mt-2" name="jenis_instansi_lainnya">
                                </div>
                            </div>

                            <!-- Pertanyaan 14 -->
                            <div class="mb-3">
                                <label class="form-label">14. Apa nama perusahaan/kantor tempat Anda
                                    bekerja?</label>
                                <input type="text" class="form-control" name="nama_perusahaan">
                            </div>

                            <!-- Pertanyaan 15 -->
                            <div class="mb-3">
                                <label class="form-label">15. Bila berwiraswasta, apa posisi/jabatan Anda saat
                                    ini?</label>
                                <select class="form-select" name="posisi">
                                    <option value="">Pilih Posisi</option>
                                    <!-- Tambahkan opsi posisi -->
                                </select>
                            </div>

                            <!-- Pertanyaan 16 -->
                            <div class="mb-3">
                                <label class="form-label">16. Apa tingkat tempat kerja Anda?</label>
                                <select class="form-select" name="tingkat_tempat_kerja">
                                    <option value="">Pilih Tingkatan</option>
                                    <!-- Tambahkan opsi tingkatan -->
                                </select>
                            </div>
                        </div>

                        <!-- Pertanyaan Studi Lanjut -->
                        {{-- <div class="mb-3">
                            <h5>Kuesioner Wajib</h5>
                            <label class="form-label">17. Pertanyaan studi lanjut</label>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <select class="form-select" name="sumber_biaya">
                                        <option value="">Pilih Sumber Biaya</option>
                                        <!-- Tambahkan opsi sumber biaya -->
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" name="perguruan_tinggi">
                                        <option value="">Pilih Kode PT</option>
                                        <!-- Tambahkan opsi perguruan tinggi -->
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" name="program_studi">
                                        <option value="">Pilih Kode PT</option>
                                        <!-- Tambahkan opsi program studi -->
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_masuk">
                                </div>
                            </div>
                        </div> --}}

                        <!-- Sumber Dana -->
                        <div class="mb-3">
                            <label class="form-label">18. Sebutkan sumberdana dalam pembiayaan kuliah?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sumber_dana" value="1">
                                <label class="form-check-label">Biaya Sendiri/Keluarga</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sumber_dana" value="2">
                                <label class="form-check-label">Beasiswa ADIK</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sumber_dana" value="3">
                                <label class="form-check-label">Beasiswa BIDIKMISI</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sumber_dana" value="4">
                                <label class="form-check-label">Beasiswa PPA</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sumber_dana" value="5">
                                <label class="form-check-label">Beasiswa AFIRMASI</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sumber_dana" value="6">
                                <label class="form-check-label">Beasiswa Perusahaan/Swasta</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sumber_dana" value="7">
                                <label class="form-check-label">Lainnya, tuliskan:</label>
                                <input type="text" class="form-control mt-2" name="sumber_dana_lainnya">
                            </div>
                        </div>

                        <!-- Hubungan Bidang Studi -->
                        <div class="mb-3">
                            <label class="form-label">19. Seberapa erat hubungan antara bidang studi dengan
                                pekerjaan anda?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hubungan_bidang"
                                    value="1">
                                <label class="form-check-label">Sangat Erat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hubungan_bidang"
                                    value="2">
                                <label class="form-check-label">Erat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hubungan_bidang"
                                    value="3">
                                <label class="form-check-label">Cukup Erat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hubungan_bidang"
                                    value="4">
                                <label class="form-check-label">Kurang Erat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hubungan_bidang"
                                    value="5">
                                <label class="form-check-label">Tidak Sama Sekali</label>
                            </div>
                        </div>

                        <!-- Tingkat Pendidikan -->
                        <div class="mb-3">
                            <label class="form-label">20. Tingkat pendidikan apa yang paling tepat/sesuai
                                untuk pekerjaan anda saat ini?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tingkat_pendidikan"
                                    value="1">
                                <label class="form-check-label">Setingkat Lebih Tinggi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tingkat_pendidikan"
                                    value="2">
                                <label class="form-check-label">Tingkat yang Sama</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tingkat_pendidikan"
                                    value="3">
                                <label class="form-check-label">Setingkat Lebih Rendah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tingkat_pendidikan"
                                    value="4">
                                <label class="form-check-label">Tidak Perlu Pendidikan Tinggi</label>
                            </div>
                        </div>

                        <!-- Kompetensi -->
                        <div class="mb-4">
                            <label class="form-label">21. Pada saat lulus, pada tingkat mana kompetensi di
                                bawah ini anda kuasai? (A)
                                Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam
                                pekerjaan? (B)</label>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 25%">Kompetensi</th>
                                            <th colspan="5">A (Pada saat lulus)</th>
                                            <th colspan="5">B (Pada saat bekerja)</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <th style="width: 7%">{{ $i }}</th>
                                            @endfor
                                            @for ($i = 1; $i <= 5; $i++)
                                                <th style="width: 7%">{{ $i }}</th>
                                            @endfor
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (['Etika', 'Keahlian berdasarkan bidang ilmu', 'Bahasa Inggris', 'Penggunaan Teknologi Informasi', 'Komunikasi', 'Kerja sama tim', 'Pengembangan Diri'] as $kompetensi)
                                            <tr>
                                                <td>{{ $kompetensi }}</td>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <td>
                                                        <input class="form-check-input" type="radio"
                                                            name="kompetensi_lulus_{{ Str::slug($kompetensi) }}"
                                                            value="{{ $i }}">
                                                    </td>
                                                @endfor
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <td>
                                                        <input class="form-check-input" type="radio"
                                                            name="kompetensi_kerja_{{ Str::slug($kompetensi) }}"
                                                            value="{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit Kuesioner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Tambahkan di awal script setelah DOMContentLoaded
                console.log('Status radios:', document.querySelectorAll('input[name="status"]').length);
                console.log('Pertanyaan container:', document.getElementById('pertanyaanPekerjaan'));

                // Fungsi untuk pertanyaan pekerjaan
                const setupPekerjaanForm = () => {
                    const radios = document.querySelectorAll('input[name="status"]');
                    const container = document.getElementById('pertanyaanPekerjaan');

                    radios.forEach(radio => {
                        radio.addEventListener('change', function() {
                            container.style.display = this.value === 'bekerja' ? 'block' : 'none';
                        });
                    });
                }

                // Form validation
                const setupFormValidation = () => {
                    const forms = document.querySelectorAll('.needs-validation');
                    forms.forEach(form => {
                        form.addEventListener('submit', event => {
                            if (!form.checkValidity()) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        });
                    });
                }

                // Highlight active section
                const setupSectionHighlight = () => {
                    const sections = document.querySelectorAll('.form-section');
                    window.addEventListener('scroll', () => {
                        let current = '';
                        sections.forEach(section => {
                            const sectionTop = section.offsetTop;
                            const sectionHeight = section.clientHeight;
                            if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                                current = section;
                            }
                        });
                        sections.forEach(section => section.classList.remove('active'));
                        if (current) {
                            current.classList.add('active');
                        }
                    });
                }

                // Initialize all functions
                setupPekerjaanForm();
                setupFormValidation();
                setupSectionHighlight();
            });
        </script>
    @endpush

</x-layout>
