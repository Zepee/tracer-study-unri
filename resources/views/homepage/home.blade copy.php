<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="{{ asset('js/script.js') }}" type="module"></script>

    {{-- Leaflet CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    {{-- Google Font: Source Sans Pro --}}
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css?v=0.001') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/home.css') }}">

    {{-- DataTables --}}
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowgroup/1.4.0/css/rowGroup.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/9c94b38548.js" crossorigin="anonymous"></script>

    {{-- Highcharts --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- Custom CSS -->
    <style>
        .dropdown-menu {
            border-left: 0.01px solid rgba(0, 0, 0, 0.05);
            border-right: 0.01px solid rgba(0, 0, 0, 0.05);
            border-bottom: 0.01px solid rgba(0, 0, 0, 0.05);
            border-top: 0.01px solid rgba(0, 0, 0, 0.05);
            box-shadow: none;
        }

        .dropdown-menu li:hover {
            background-color: rgba(41, 52, 47, 0.05);
        }

        .dropdown-menu form li:hover {
            background-color: rgba(41, 52, 47, 0.05);
        }


        @media screen and (max-width: 768px) {
            .cardskripsi {
                margin-bottom: 50px;
            }

            .dropdown-menu form li i {
                margin-left: -15px;
            }

            .navbar-collapse {
                /*background: rgba(0, 0, 0, 0.05);*/
                padding-left: 25px;
                padding-right: 25px;
            }

            .dropdown-menu {
                background: radial-gradient(circle at top left, #ffffff, #e5e5e5);

            }

            .navbar-nav li a {
                text-align: center;
            }

            .navbar-nav li button {
                text-align: center;
            }

        }

        .dropdown-item:hover {
            color: #0c8a4f;
            background-color: rgba(41, 52, 47, 0.05);
        }

        form li button:hover {
            color: #0c8a4f;
            background-color: rgba(41, 52, 47, 0.05);
        }

        .cursor-default {
            cursor: default !important;

        }

        .cursor-default:hover {
            cursor: default !important;
            color: #192f59 !important;
            background-color: white !important;
        }

        #datatablesriwayatseminar_length,
        #datatablesriwayatseminar_filter {
            display: none;
        }

        #datatablesriwayatkpdanskripsi_length,
        #datatablesriwayatkpdanskripsi_filter {
            display: none;
        }

        #datatablesbimbinganskripsi_length,
        #datatablesbimbinganskripsi_filter {
            display: none;
        }

        #datatablesbimbingankp_length,
        #datatablesbimbingankp_filter {
            display: none;
        }

        #datatablesjadwalseminarpembimbingpenguji_length,
        #datatablesjadwalseminarpembimbingpenguji_filter {
            display: none;
        }

        #datatablespersetujuankpskripsi_length,
        #datatablespersetujuankpskripsi_filter {
            display: none;
        }

        #datatablesriwayatseminardibatalkan_length,
        #datatablesriwayatseminardibatalkan_filter {
            display: none;
        }

        #datatablesriwayatseminarprodi_length,
        #datatablesriwayatseminarprodi_filter {
            display: none;
        }

        #datatablesriwayatkpskripsiprodi_length,
        #datatablesriwayatkpskripsiprodi_filter {
            display: none;
        }

        #datatablesdataskripsiprodi_length,
        #datatablesdataskripsiprodi_filter {
            display: none;
        }

        #datatablesdatakpprodi_length,
        #datatablesdatakpprodi_filter {
            display: none;
        }

        #datatablesjadwalseminarprodi_length,
        #datatablesjadwalseminarprodi_filter {
            display: none;
        }

        #datatablesdaftarlulusbimbinganskripsi_length,
        #datatablesdaftarlulusbimbinganskripsi_filter {
            display: none;
        }

        #datatablesdaftarbebanbimbinganskripsi_length,
        #datatablesdaftarbebanbimbinganskripsi_filter {
            display: none;
        }

        #datatablesdaftarselesaibimbingankp_length,
        #datatablesdaftarselesaibimbingankp_filter {
            display: none;
        }

        #datatablesdaftarbebanbimbingankp_length,
        #datatablesdaftarbebanbimbingankp_filter {
            display: none;
        }

        #datatablesdataskripsimhsadmin_length,
        #datatablesdataskripsimhsadmin_filter {
            display: none;
        }

        #datatablesdatakpmhsadmin_length,
        #datatablesdatakpmhsadmin_filter {
            display: none;
        }

        #datatablesjadwalseminaradminprodi_length,
        #datatablesjadwalseminaradminprodi_filter {
            display: none;
        }

        #datatablespersetujuankpskripsiadmin_length,
        #datatablespersetujuankpskripsiadmin_filter {
            display: none;
        }

        #datatablesdaftarmhsadmprodi_length,
        #datatablesdaftarmhsadmprodi_filter {
            display: none;
        }

        #datatablesdaftarprodiadmjurusan_length,
        #datatablesdaftarprodiadmjurusan_filter {
            display: none;
        }

        #datatablesdaftarkonsentrasiadmjurusan_length,
        #datatablesdaftarkonsentrasiadmjurusan_filter {
            display: none;
        }

        #datatablesdaftardosenadmjurusan_length,
        #datatablesdaftardosenadmjurusan_filter {
            display: none;
        }

        #datatablesdaftartendikadmjurusan_length,
        #datatablesdaftartendikadmjurusan_filter {
            display: none;
        }

        #datatablesdaftarplpadmjurusan_length,
        #datatablesdaftarplpadmjurusan_filter {
            display: none;
        }

        #datatablesdaftarhakaksesadmjurusan_length,
        #datatablesdaftarhakaksesadmjurusan_filter {
            display: none;
        }

        #datatablesjadwalseminaruntukmhs_length,
        #datatablesjadwalseminaruntukmhs_filter {
            display: none;
        }

        #datatablesjudulskripsiterdaftar_length,
        #datatablesjudulskripsiterdaftar_filter {
            display: none;
        }
    </style>
</head>
<body>
    <div id="app">

        <div class="atas">
            <x-navbar/>
        </div>

        <main class="py-0">
            <div class="container-fluid p-0">
                <!-- Banner -->
                <div class="hero-banner d-flex align-items-center text-white text-start">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 py-5">
                            <h1 class="display-4 fw-bold">Tracer Study Teknik Informatika <br> Universitas Riau</h1>
                            <p class="lead mb-4">Mari sukseskan pelaksanaan Tracer Study Universitas Riau</p>
                            <a href="/kuesioner" class="btn btn-light btn-lg fw-bold">Isi Survey</a>
                        </div>
                    </div>
                </div>
                </div>
            
            
                <!-- About Section -->
                <div class="container py-5" >
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('images/university.jpg') }}" class="img-fluid rounded" alt="Kampus">
                        </div>
                        <div class="col-md-6">
                            <h2 class="fw-bold">Tracer Study Universitas Riau</h2>
                            <p>
                                Tracer Study merupakan penelitian untuk melacak aktivitas alumni setelah lulus 
                                dari Perguruan Tinggi, khususnya mengenai posisi pekerjaan di perusahaan tempat 
                                alumni bekerja dan relevansi ilmu yang mereka peroleh. 
                            </p>
                            <p>
                                Informasi ini akan membantu meningkatkan mutu pendidikan dan pengelolaan kampus, 
                                serta menjadi bahan evaluasi bagi stakeholder eksternal. 
                            </p>
                        </div>
                    </div>
                </div>
            
                <!-- Manfaat -->
                <div class="container-fluid py-5" style="background-color: #F4F4F4;">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Bagian Kiri: Teks Manfaat -->
                            <div class="col-md-6">
                                <h2 class="fw-bold">Manfaat</h2>
                                <p>
                                    Fokus tracer study yang dilakukan adalah untuk memotret keterkaitan lulusan 
                                    di dunia kerja sehingga parameter minimal yang dilacak adalah masa tunggu, 
                                    bidang pekerjaan, dan gaji pertama. Hasil TS diharapkan akan menjadi dasar 
                                    bagi Program Studi untuk melakukan need assessment survey pada external stakeholder 
                                    untuk menilai secara spesifik persepsi external stakeholder terhadap kompetensi lulusan 
                                    yang bekerja pada institusinya maupun harapan terhadap kebutuhan kompetensi yang harus 
                                    dimiliki oleh lulusan agar dapat bekerja secara profesional.
                                </p>
                            </div>
            
                            <!-- Bagian Kanan: Grid Gambar -->
                            <div class="col-md-6">
                                <div class="row row-cols-2 g-3">
                                    <div class="col">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('images/campus1.jpg') }}" alt="Campus">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('images/campus2.jpg') }}" alt="Campus">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('images/campus3.jpg') }}" alt="Campus">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('images/campus4.jpg') }}" alt="Campus">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Laporan Jumlah Alumni -->
                <div class="text-white py-5" style="background-color: #28a745;">
                    <div class="container text-center">
                        <h2 class="fw-bold">Laporan Jumlah Alumni</h2>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="p-4 bg-white rounded">
                                    <h3 class="text-dark">876</h3>
                                    <p class="text-dark">Total Lulusan</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 bg-white rounded">
                                    <h3 class="text-dark">628</h3>
                                    <p class="text-dark">Alumni Bekerja</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Pemetaan Alumni -->
                <div class="pemetaan container py-5">
                    <h2 class="text-center mb-4 fw-bold">Pemetaan Alumni</h2>
                    <div class="d-flex justify-content-center">
                        <div id="map" class="rounded" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="lihat-peta text-center mt-3">
                        <a href="/map" class="btn btn-lg fw-bold" style="background-color: #28a745; color: white;">Lihat Peta</a>
                    </div>
                </div>
            
            
                <!-- Banner Footer -->
                <div class="footer-banner d-flex align-items-center justify-content-center text-center">
                    <div class="container">
                        <h2 class="fw-bold mb-3">Mari sukseskan pelaksanaan Tracer Study Universitas Riau</h2>
                        <a href="/kuesioner" class="btn btn-light btn-lg fw-bold">Isi Survey</a>
                    </div>
                </div>
            
            
                <!-- Footer -->
                <footer class="text-white text-center py-10" style="margin-top: 0; padding-top: 0;">
                    <x-footer/>
                </footer>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="{{ asset('js/script.js') }}" type="module"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/js/script.js'])
</body>
</html>