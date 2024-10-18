<link rel="stylesheet" href="{{ asset('/assets/css/home.css') }}">


<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script src="{{ asset('js/script.js') }}" type="module"></script>

<x-layout>
    <x-slot name="header">
        Halaman Peta
    </x-slot>

    <!-- Banner Peta -->
    <div class="hero-banner d-flex align-items-center text-white text-start">
    <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5">
                    <h2 class="fw-bold mb-3">Mari sukseskan pelaksanaan Tracer Study Universitas Riau</h2>
                    <a href="#" class="btn btn-light btn-lg fw-bold">Isi Survey</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Pemetaan Alumni -->
    <div class="container py-5">
        <h2 class="text-center mb-4 fw-bold">Pemetaan Alumni</h2>
    <div class="d-flex justify-content-center mb-5">
        <div id="map" class="rounded" style="width: 100%; height: 60vh;min-height: 400px;"></div>
    </div>

    <!-- Filter Alumni -->
    <h3 class="mb-4">Filter Alumni</h3>
    <form class="row g-3">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Nama Perusahaan">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Nama Negara">
        </div>
        <div class="col-md-4">
            <select id="provinceSelect" class="form-select">
                <option value="">Pilih Provinsi</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="citySelect" class="form-select" disabled>
                <option value="">Pilih Kota</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Tahun Lulus">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn w-100" style="background-color: #28a745; color: white;">Filter</button>
        </div>
    </form>

    <!-- Tabel Alumni -->
    <div class="table-responsive mt-5">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Perusahaan</th>
                        <th>Nama Negara</th>
                        <th>Nama Provinsi</th>
                        <th>Nama Kota</th>
                        <th>Tahun Lulus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6" class="text-muted">Belum ada data alumni.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    @vite(['resources/js/script.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</x-layout>


