<x-layout>

    <x-slot name="header">      
        Halaman Alumni
    </x-slot>
    
    <div class="container card p-4">
        {{-- Sub-navbar --}}
        <ul class="breadcrumb col-lg-12">
            <li>
                <a href="{{ route('alumni') }}" class="breadcrumb-item active fw-bold text-success px-1">
                    Data Alumni
                </a>
            </li>
            <span class="px-2">|</span>
            <li>
                <a href="{{ route('peta') }}" class="px-1">
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
                    <select id="lengthMenuDaftarMahasiswaAdminProdi" class="custom-select custom-select-md rounded-3 py-1"
                        style="width: 55px;">
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
                <select id="lengthMenuMobileDaftarMahasiswaAdminProdi" class="custom-select custom-select-md rounded-3 py-1"
                    style="width: 55px;">
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
                                <button class="btn btn-secondary btn-sm btnCopy" data-slug="#">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>

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