<!-- CSS -->
<link rel="stylesheet" href="{{ asset('/assets/css/home.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.Default.css" />

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet.markercluster@1.5.1/dist/leaflet.markercluster.js"></script>
<script src="https://unpkg.com/leaflet.heat/dist/leaflet-heat.js"></script>
<script src="{{ asset('js/script.js') }}" type="module"></script>

<x-layout>
    <x-slot name="header">
        Halaman Peta
    </x-slot>

    {{-- <!-- Banner Peta -->
    <div class="hero-banner d-flex align-items-center text-white text-start">
    <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5">
                    <h2 class="fw-bold mb-3">Mari sukseskan pelaksanaan Tracer Study Universitas Riau</h2>
                    <a href="#" class="btn btn-light btn-lg fw-bold">Isi Survey</a>
                </div>
            </div>
        </div>
    </div> --}}


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

                <a href="{{ route('alumni') }}" class="px-1" >


                    Data Alumni
                </a>
            </li>
            <span class="px-2">|</span>
            <li>

                <a href="{{ route('alumni.peta') }}" class="breadcrumb-item active fw-bold text-success px-1">

                    Peta Alumni
                </a>
            </li>
        </ul>
        {{-- Sub-navbar --}}

         <!-- Section Pemetaan Alumni -->
        <div class="container py-5">
            <h2 class="text-center mb-4 fw-bold">Pemetaan Alumni</h2>
            <div class="d-flex justify-content-center mb-5">
                <div id="map" class="rounded" style="width: 100%; height: 60vh;min-height: 400px;"></div>
            </div>
        </div>

        <!-- Filter Alumni -->
        <h3 class="mb-4">Filter Alumni</h3>
        <form class="row g-3">
            <div class="col-md-4">
                <h5>Nama Alumni</h5>
                <input type="text" class="form-control" placeholder="Nama" id="filterName">
            </div>
            <div class="col-md-4">
                <h5>Perusahaan</h5>
                <select id="companySelect" class="form-select">
                    <option value="">Pilih Perusahaan</option>
                    <!-- Nanti diisi dengan perusahaan secara dinamis di JavaScript -->
                </select>
            </div>
            <div class="col-md-4">
                <h5>Provinsi</h5>
                <select id="provinceSelect" class="form-select">
                    <option value="">Pilih Provinsi</option>
                </select>
            </div>
            <div class="col-md-4">
                <h5>Kota</h5>
                <select id="citySelect" class="form-select" disabled>
                    <option value="">Pilih Kota</option>
                </select>
            </div>
            <div class="col-md-4">
                <h5>Tahun Lulus</h5>
                <select id="yearSelect" class="form-select">
                    <option value="">Semua</option>
                    <!-- Tahun lulus 2014 sampai tahun sekarang akan diisi dinamis melalui JavaScript -->
                </select>
            </div>
        </form>



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
                    <select id="lengthMenuDaftarMahasiswaAdminProdi" class="custom-select custom-select-md rounded-3 py-1"
                        style="width: 55px;">
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="250">250</option>
                    </select>
                </div>
                <!-- <div class="input-group ml-3" style="width: max-content;">
                    <label class="pt-2 pr-2" for="angkatanFilterDaftarMahasiswaAdminProdi">Tahun Lulus</label>
                    <select id="angkatanFilterDaftarMahasiswaAdminProdi"
                        class="custom-select custom-select-md rounded-3 py-1 text-capitalize" style="width: 83px;">
                        <option value="" selected>Semua</option>
                        @foreach ($unique_angkatan as $angkatan)
                            <option value="{{ $angkatan }}">{{ $angkatan }}</option>
                        @endforeach
                    </select>
                </div> -->
                {{-- <div class="input-group ml-3" style="width: max-content;">
                    <label class="pt-2 pr-2" for="angkatanFilterDaftarMahasiswaAdminProdi">Status Pekerjaan</label>
                    <select id="angkatanFilterDaftarMahasiswaAdminProdi"
                        class="custom-select custom-select-md rounded-3 py-1 text-capitalize" style="width: 83px;">
                        <option value="" selected>Semua</option>
                        @foreach ($unique_status_pekerjaan as $status_pekerjaan)
                            <option value="{{ $status_pekerjaan }}">{{ $status_pekerjaan }}</option>
                        @endforeach
                    </select>
                </div> --}}
            </div>
            <!-- <div class="dataTables_filter input-group" style="width: max-content;">
                <label class="pt-2 pr-2" for="searchFilterDaftarMahasiswaAdminProdi">Cari</label>
                <input type="search" class="form-control form-control-md rounded-3 py-1"
                    id="searchFilterDaftarMahasiswaAdminProdi" placeholder="">
            </div> -->
        </div>

        <!-- Tablet & Mobile Version -->
        <div class="d-flex flex-wrap justify-content-center gap-3 filter d-block d-md-none">
            <div class="dataTables_length input-group" style="width: max-content;">
                <label class="pt-2 pr-2" for="lengthMenuMobileDaftarMahasiswaAdminProdi">Tampilkan</label>
                <select id="lengthMenuMobileDaftarMahasiswaAdminProdi" class="custom-select custom-select-md rounded-3 py-1"
                    style="width: 55px;">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                    <option value="200">200</option>
                    <option value="250">250</option>
                </select>
            </div>
            <!-- <div class="input-group" style="width: max-content;">
                <label class="pt-2 pr-2" for="angkatanFilterMobileDaftarMahasiswaAdminProdi">Angkatan</label>
                <select id="angkatanFilterMobileDaftarMahasiswaAdminProdi"
                    class="custom-select custom-select-md rounded-3 py-1 text-capitalize" style="width: 83px;">
                    <option value="" selected>Semua</option>
                    @foreach ($unique_angkatan as $angkatan)
                        <option value="{{ $angkatan }}">{{ $angkatan }}</option>
                    @endforeach
                </select>
            </div> -->
        </div>
        <!-- <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 filter d-block d-md-none">
            <div class="dataTables_filter input-group mt-3" style="width: max-content;">
                <label class="pt-2 pr-2" for="searchFilterMobileDaftarMahasiswaAdminProdi">Cari</label>
                <input type="search" class="form-control form-control-md rounded-3 py-1"
                    id="searchFilterMobileDaftarMahasiswaAdminProdi" placeholder="">
            </div>
        </div> -->
        {{-- Filter --}}

        <table class="table table-responsive-lg table-bordered table-striped" id="datatables">
            <thead class="table-dark">
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama</th>
                    <th class="text-center" scope="col">Pekerjaan</th>
                    <th class="text-center" scope="col">Nama Perusahaan</th>
                    <th class="text-center" scope="col">Nama Provinsi</th>
                    <th class="text-center" scope="col">Nama Kota</th>
                    <th class="text-center" scope="col">Tahun Lulus</th>
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
                        <td class="text-center">tidak ada data</td>
                        <td class="text-center">tidak ada data</td>
                        <td class="text-center">
                            <div class="d-flex gap-2 justify-content-center">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                            </div>
                        </td>   
                    </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="detailModalLabel">Profil Pribadi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Konten Detail Alumni -->
            <div id="modalContent">
            <!-- Detail alumni akan ditambahkan di sini menggunakan JavaScript -->
            </div>
        </div>
        </div>
    </div>
    </div>
    


    @vite(['resources/js/script.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</x-layout>


