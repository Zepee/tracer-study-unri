<!-- CSS -->
<link rel="stylesheet" href="{{ asset('/assets/css/home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.1/dist/MarkerCluster.Default.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.css" rel="stylesheet">

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet.markercluster@1.5.1/dist/leaflet.markercluster.js"></script>
<script src="https://unpkg.com/leaflet.heat/dist/leaflet-heat.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('js/script.js') }}" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/nouislider@14.6.3/distribute/nouislider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js"></script>


<style>
#filterPopup {
    position: absolute;
    bottom: 20px;
    left: 20px;
    background-color: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    width: 350px;
    display: none; /* Awalnya tersembunyi */
    z-index: 1000;
}
/* Tambahkan media query untuk tampilan mobile */
@media (max-width: 768px) {
    #filterPopup {
        width: 90%; /* Memenuhi hampir seluruh lebar layar */
        left: 5%;   /* Tengah pada layar kecil */
        bottom: auto;
        top: 10%;  /* Pindahkan ke atas agar lebih mudah diakses */
    }
}

#filterButton { 
    position: absolute;
    bottom: 20px;
    left: 20px;
    background-color: white;
    color: white;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
    z-index: 1000;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Tambahkan shadow */
    transition: box-shadow 0.3s ease; /* Animasi halus saat hover */
}

#filterButton:hover {
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Shadow lebih besar saat di-hover */
}

/* Style untuk tanda silang (clear button) pada Select2 */
.select2-container--default .select2-selection--single {
    height: 38px;
    padding: 0 6px;  /* Kurangi padding */
}

.select2-container--default .select2-selection--single .select2-selection__clear {
    height: 36px;
    line-height: 34px;  /* Kurangi line-height */
    margin-right: 25px;
    color: #6c757d;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    right: 20px;
    top: 1px;  /* Sesuaikan posisi vertikal */
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 36px;  /* Sesuaikan line-height */
    padding-right: 40px; /* Beri ruang untuk tanda silang */
    padding-left: 8px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 36px;
    right: 3px;
    top: 1px;
}

.select2-container--default .select2-selection--single .select2-selection__clear:hover {
    color: #dc3545;
}

.form-select, .form-control {
    border: 1px solid #ddd;
    padding: 8px 12px;
}



/* Gaji Slider */
.salary-inputs span {
    min-width: 40px;
}

.gaji-slider {
    color: #333;
    margin: 15px 0;
}
.gaji-slider label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}
.gaji-slider .salary-inputs {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
    gap: 5px;
}

.gaji-slider .salary-input-group {
    display: flex;
    align-items: center;
    gap: 5px;
    width: 48%;
}

.gaji-slider input {
    width: 85%;
    text-align: left;
    padding: 4px 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #f8f9fa;
    font-size: 14px;
}

.slider {
    height: 10px;
    border-radius: 5px;
    background: #ccc;
}
.noUi-handle {
    background: #333;
    border-radius: 3px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    height: 18px;
    width: 18px;
    top: -4px;
}

/* Tambah margin untuk slider */
#salarySlider {
    margin: 30px 0; /* Margin atas dan bawah untuk slider */
}

/* Styling untuk tombol filter dan reset */
.filter-buttons {
    display: flex;
    gap: 10px; /* Spacing antara tombol */
    margin-top: 20px; /* Margin atas dari slider */
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .gaji-slider .salary-input-group {
        width: 45%;
    }
    
    .gaji-slider input {
        width: 80%;
    }
}

/* Responsif untuk layar sangat kecil */
@media (max-width: 480px) {
    .gaji-slider .salary-input-group {
        width: 42%;
    }
    
    .gaji-slider input {
        width: 75%;
    }
}

.noUi-target {
    height: 4px; /* Mengubah ketebalan track slider */
    border: none;
    background: #e0e0e0; /* Warna track slider */
    box-shadow: none;
}

/* Handle/thumb slider */
.noUi-handle {
    width: 20px !important; /* Lebar handle */
    height: 20px !important; /* Tinggi handle */
    border-radius: 50% !important; /* Membuat handle bulat */
    background-color: #333 !important; /* Warna handle */
    border: none !important;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2) !important; /* Bayangan handle */
    cursor: pointer;
}

/* Menghilangkan garis di dalam handle */
.noUi-handle:before,
.noUi-handle:after {
    display: none;
}
</style>

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
    <ul class="breadcrumb col-lg-12">
            <li>
                <a href="{{ route('alumni.profil') }}" class="px-1">
                    Profil
                </a>
            </li>
            <span class="px-2">|</span>

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
        <div class="container py-2">
            <h2 class="text-center mb-4 fw-bold">Peta Alumni</h2>
            <div class="d-flex justify-content-center mb-5">
                <div id="map" class="rounded" style="width: 100%; height: 80vh;min-height: 400px;">'
                <!-- Tombol untuk membuka pop-up filter -->
                <div id="filterButton">⚙️</div>

                <!-- Pop-up filter alumni -->
                <div id="filterPopup" >
                    <div class="mb-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h5 >Filter Alumni</h5>
                        <button type="button" id="closeFilterPopup" style="background: none; border: none; font-size: 20px; cursor: pointer;">&times;</button>
                    </div>
                    <form id="filterForm">
                        <div class="mb-3">
                            
                            <select id="filterName" class="form-control">
                                <option value="">Semua</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            
                            <select id="companySelect" class="form-control">
                                <option value="">Semua</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            
                            <select id="provinceSelect" class="form-control">
                                <option value="">Semua</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            
                            <select id="citySelect" class="form-control" disabled>
                                <option value="">Semua</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Lulus</label>
                            <select id="yearSelect" class="form-control">
                                <option value="">Semua</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status Pekerjaan</label>
                            <select id="jobStatusSelect" class="form-select">
                                <!-- <option value="">Semua</option>
                                <option value="bekerja">Bekerja</option>
                                <option value="tidak_bekerja">Tidak Bekerja</option> -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <select id="jobSelect" class="form-select ">
                                <option value="">Pekerjaan</option>
                            </select>
                        </div>
                        <div class="gaji-slider">
                            <label>Gaji</label>
                            <div class="salary-inputs">
                                <div class="salary-input-group">
                                    <span>MIN</span>
                                    <input type="text" id="minSalary" readonly>
                                </div>
                                <div class="salary-input-group">
                                    <span>MAX</span>
                                    <input type="text" id="maxSalary" readonly>
                                </div>
                            </div>
                            <div id="salarySlider" class="slider"></div>
                        </div>
                        <!-- <div class="mb-3">
                            <label class="form-label">Gaji</label>
                            <div class="salary-inputs mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <span>MIN</span>
                                    <input type="text" id="minSalary" class="form-control rounded-pill" placeholder="0">
                                </div>
                                <div class="d-flex align-items-center gap-2 mt-2">
                                    <span>MAX</span>
                                    <input type="text" id="maxSalary" class="form-control rounded-pill" placeholder="Rp20.000.000">
                                </div>
                            </div>
                            <div id="salarySlider"></div>
                        </div> -->

                        
                        <!-- BUTTON -->
                        <div class="filter-buttons">
                            <button type="button" class="btn btn-success flex-grow-1" id="filterButton2">Filter</button>
                            <button type="button" class="btn btn-secondary"  id="resetButton">Reset</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        


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
    




</x-layout>


