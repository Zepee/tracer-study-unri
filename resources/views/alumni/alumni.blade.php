
<style>
    .gradient-text {
        background: linear-gradient(to right, #059669, #2563eb);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .btn-gradient {
        background: linear-gradient(to right, #4ade80, #3b82f6);
        border: none;
        color: white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative; 
        z-index: 1; 
        cursor: pointer; 
    }
    
    .btn-gradient a {
        color: white;
        text-decoration: none;
    }
    
    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .btn-gradient:hover a {
        color: black;
    }

    form .form-label {
        font-weight: bold;
    }
    
    select.form-select option {
        color: black;
        font-weight: bold;
    }

    select.form-select option:disabled {
        color: #6c757d;
    }
</style>

<x-layout>

    <x-slot name="header">
        Halaman Alumni
    </x-slot>


    <div class="container card p-4">
        {{-- Sub-navbar --}}
        <ul class="breadcrumb col-lg-12">
            <li>
                <a href="{{ route('alumni.profil') }}" class="px-1">
                    Profil
                </a>
            </li>
            <span class="px-2">|</span>
            <li>
                <a href="{{ route('alumni') }}" class="breadcrumb-item active fw-bold text-success px-1">
                    Data Alumni
                </a>
            </li>
            <span class="px-2">|</span>
            <li>
                <a href="{{ route('alumni.peta') }}" class="px-1">
                    Peta Alumni
                </a>
            </li>
        </ul>
        {{-- Sub-navbar --}}

        {{-- Filter --}}
        @php
            // Contoh data statis untuk angkatan
            $unique_angkatan = ['2018', '2019', '2020', '2021', '2022'];
            $unique_status_pekerjaan = ['bekerja', 'tidak bekerja'];
        @endphp

        <!-- Desktop Version -->
        <div class="d-none d-md-flex justify-content-between mb-3 filter">
            <div class="d-flex align-items-center">
                <div class="dataTables_length input-group" style="width: max-content;">
                    <label class="pt-2 pr-2" for="lengthMenuDaftarMahasiswaAdminProdi">Tampilkan</label>
                    <select id="lengthMenuDaftarMahasiswaAdminProdi"
                        class="custom-select custom-select-md rounded-3 py-1" style="width: 55px;">
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="250">250</option>
                    </select>
                </div>
                <div class="input-group ml-3" style="width: max-content;">
                    <label class="pt-2 pr-2" for="angkatanFilterDaftarMahasiswaAdminProdi">Tahun Lulus</label>
                    <select id="angkatanFilterDaftarMahasiswaAdminProdi"
                        class="custom-select custom-select-md rounded-3 py-1 text-capitalize" style="width: 83px;">
                        <option value="" selected>Semua</option>
                        @foreach ($unique_angkatan as $angkatan)
                            <option value="{{ $angkatan }}">{{ $angkatan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group ml-3" style="width: max-content;">
                    <label class="pt-2 pr-2" for="angkatanFilterDaftarMahasiswaAdminProdi">Status Pekerjaan</label>
                    <select id="angkatanFilterDaftarMahasiswaAdminProdi"
                        class="custom-select custom-select-md rounded-3 py-1 text-capitalize" style="width: 83px;">
                        <option value="" selected>Semua</option>
                        @foreach ($unique_status_pekerjaan as $status_pekerjaan)
                            <option value="{{ $status_pekerjaan }}">{{ $status_pekerjaan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="dataTables_filter input-group" style="width: max-content;">
                <label class="pt-2 pr-2" for="searchFilterDaftarMahasiswaAdminProdi">Cari</label>
                <input type="search" class="form-control form-control-md rounded-3 py-1"
                    id="searchFilterDaftarMahasiswaAdminProdi" placeholder="">
            </div>
        </div>

        <!-- Tablet & Mobile Version -->
        <div class="d-flex flex-wrap justify-content-center gap-3 filter d-block d-md-none">
            <div class="dataTables_length input-group" style="width: max-content;">
                <label class="pt-2 pr-2" for="lengthMenuMobileDaftarMahasiswaAdminProdi">Tampilkan</label>
                <select id="lengthMenuMobileDaftarMahasiswaAdminProdi"
                    class="custom-select custom-select-md rounded-3 py-1" style="width: 55px;">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                    <option value="200">200</option>
                    <option value="250">250</option>
                </select>
            </div>
            <div class="input-group" style="width: max-content;">
                <label class="pt-2 pr-2" for="angkatanFilterMobileDaftarMahasiswaAdminProdi">Angkatan</label>
                <select id="angkatanFilterMobileDaftarMahasiswaAdminProdi"
                    class="custom-select custom-select-md rounded-3 py-1 text-capitalize" style="width: 83px;">
                    <option value="" selected>Semua</option>
                    @foreach ($unique_angkatan as $angkatan)
                        <option value="{{ $angkatan }}">{{ $angkatan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 filter d-block d-md-none">
            <div class="dataTables_filter input-group mt-3" style="width: max-content;">
                <label class="pt-2 pr-2" for="searchFilterMobileDaftarMahasiswaAdminProdi">Cari</label>
                <input type="search" class="form-control form-control-md rounded-3 py-1"
                    id="searchFilterMobileDaftarMahasiswaAdminProdi" placeholder="">
            </div>
        </div>
        {{-- Filter --}}

        <table class="table table-responsive-lg table-bordered table-striped" id="datatables">
            <thead class="table-dark">
                <tr>
                    <th class="text-center" scope="col">Nomor</th>
                    <th class="text-center" scope="col">Nim</th>
                    <th class="text-center" scope="col">Nama</th>
                    <th class="text-center" scope="col">Tahun Lulus</th>
                    <th class="text-center" scope="col">Status Pekerjaan</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">tidak ada data</td>
                    <td class="text-center">tidak ada data</td>
                    <td class="text-center">tidak ada data</td>
                    <td class="text-center">tidak ada data</td>
                    <td class="text-center">tidak ada data</td>

                    <td class="text-center">
                        <div class="d-flex gap-2 justify-content-center">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            {{-- <button class="btn btn-secondary btn-sm btnCopy" data-slug="#">
                                <i class="fa-solid fa-share-nodes"></i>
                            </button> --}}
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    {{-- Tabel 2 --}}
    {{-- <div class="container mt-5">
        <hr>
        <button class="btn btn-gradient mb-4 mt-2 d-flex align-items-center justify-content-center">
            <a href="">
                <i class="bi bi-arrow-left me-2"></i> Kembali
            </a>
            
        </button>

        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-header bg-white p-0">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="{{ route('alumni.profil') }}" class="nav-link px-4 py-3">
                            Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('alumni') }}" class="breadcrumb-item active fw-bold text-success nav-link px-4 py-3">
                            Data Alumni
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('alumni.peta') }}" class="nav-link px-4 py-3">
                            Peta Alumni
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card-body p-4">
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <label class="me-2">Tampilkan</label>
                                <select class="form-select form-select-sm w-auto" id="show-entries">
                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10
                                    </option>
                                    <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50
                                    </option>
                                    <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100
                                    </option>
                                    <option value="150" {{ request('per_page') == 150 ? 'selected' : '' }}>150
                                    </option>
                                </select>
                                <label class="ms-2">entri</label>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered align-middle">
                                <thead class="text-center table-secondary">
                                    <tr>
                                        <th scope="col" class="text-center align-middle">No.</th>
                                        <th scope="col" class="text-center align-middle">NIM</th>
                                        <th scope="col" class="text-center align-middle">Nama</th>
                                        <th scope="col" class="text-center align-middle">Tahun Lulus</th>
                                        <th scope="col" class="text-center align-middle">Status Pekerjaan</th>
                                        <th scope="col" class="text-center align-middle">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="text-center">Belum ada data bimbingan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3">
                            <p class="mb-2">
                                Menampilkan sampai
                                dari entri
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Tabel 2 --}}
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();

            $('.btnCopy').click(function() {
                var slugToCopy = $(this).data('slug');
                navigator.clipboard.writeText(slugToCopy).then(function() {
                    alert('Tautan berhasil disalin!');
                });
            });
        });
    </script>

</x-layout>
