<x-layout>

    <x-slot name="header">
        Halaman Kuesioner Tracer Study
    </x-slot>
    
    <div class="py-0">
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
        </div>
    </div>
</x-layout>	