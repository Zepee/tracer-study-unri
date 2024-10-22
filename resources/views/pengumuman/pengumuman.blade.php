<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .text-unri {
            color: #2e7d32;
        }
        .text-unri:hover {
            color: #1b5e20;
        }
        .btn-unri {
            background-color: #2e7d32;
            color: white;
        }
        .btn-unri:hover {
            background-color: #1b5e20;
            color: white;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .progress-bar {
            transition: width 1.5s ease-in-out;
        }
        .alert-success {
            background-color: rgba(46, 125, 50, 0.1);
            border-color: rgba(46, 125, 50, 0.2);
            color: #2e7d32;
        }
        .btn-outline-success {
            color: #2e7d32;
            border-color: #2e7d32;
        }
        .btn-outline-success:hover {
            background-color: #2e7d32;
            color: white;
        }
        .announcement-title {
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e0e0e0;
        }
        .announcement-item {
            margin-bottom: 1.5rem;
        }
        .announcement-item h3 {
            margin-bottom: 0.25rem;
        }
        .announcement-item p {
            margin-bottom: 0.5rem;
        }
        .pengumuman-item {
            border-left: 4px solid #2e7d32;
            padding-left: 15px;
            transition: all 0.3s ease;
        }
        .pengumuman-item:hover {
            background-color: rgba(46, 125, 50, 0.05);
            transform: translateX(5px);
        }
    </style>

<x-layout>
    <x-slot name="header">
        Pengumuman
    </x-slot>
    
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-unri mb-4 pb-2 border-bottom col-12"><i class="fas fa-bullhorn me-2"></i>Pengumuman Terbaru</h2>

                        <div class="mb-4 pengumuman-item">
                            <h3 class="h4 mb-3 fw-bold">Pengumuman Tracer Study Teknik Informatika UNRI 2023</h3>
                            <p class="text-muted mb-2"><i class="far fa-calendar-alt me-2"></i>21 Oktober 2023 | <i class="far fa-user me-2"></i>Tim Tracer Study</p>
                            <p class="mb-3">Kepada seluruh alumni Teknik Informatika Universitas Riau, kami mengundang Anda untuk berpartisipasi dalam Tracer Study 2023. Partisipasi Anda sangat berharga bagi pengembangan program studi dan peningkatan kualitas lulusan kami.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Baca selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>

                        <div class=" mb-4 pengumuman-item">
                            <h3 class="h4 mb-3 fw-bold">Periode Pengisian Tracer Study</h3>
                            <p class="text-muted mb-2">Tim Tracer Study | 20 Oktober 2023</p>
                            <p>Kami informasikan bahwa periode pengisian Tracer Study 2023 akan berlangsung dari tanggal 1 November hingga 30 November 2023. Mohon partisipasi aktif dari seluruh alumni.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Baca selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>

                        <div class=" mb-4 pengumuman-item">
                            <h3 class="h4 mb-3 fw-bold">Pentingnya Data Tracer Study</h3>
                            <p class="text-muted mb-2">Ketua Program Studi | 19 Oktober 2023</p>
                            <p>Data Tracer Study sangat penting untuk evaluasi dan pengembangan kurikulum. Kami mengajak seluruh alumni untuk berkontribusi dalam peningkatan kualitas pendidikan di Teknik Informatika UNRI.</p>
                            <a href="#" class="btn btn-sm btn-outline-success">Baca selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <h2 class="card-title text-unri col-12"><i class="fas fa-chart-bar me-2"></i>Statistik Performa Lulusan</h2>
                        <canvas id="employmentChart"></canvas>
                    </div>
                </div>

                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <h2 class="card-title text-unri col-12"><i class="fas fa-graduation-cap me-2"></i>Tingkat Kepuasan Lulusan</h2>
                        <canvas id="satisfactionChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-unri"><i class="fas fa-info-circle me-2"></i>Informasi Penting</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Batas waktu pengisian
                                <span class="badge bg-unri rounded-pill">30 Nov 2023</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total responden saat ini
                                <span class="badge bg-unri rounded-pill">150 alumni</span>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    Tingkat partisipasi
                                    <span>75%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-unri" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-unri"><i class="fas fa-link me-2"></i>Tautan Cepat</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" class="text-unri">Formulir Tracer Study</a></li>
                            <li class="list-group-item"><a href="#" class="text-unri">Panduan Pengisian</a></li>
                            <li class="list-group-item"><a href="#" class="text-unri">Hasil Tracer Study Tahun Lalu</a></li>
                        </ul>
                    </div>
                </div>
            
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-unri col-12"><i class="fas fa-quote-left me-2"></i>Testimoni Alumni</h3>
                        <div class="mb-3">
                            <p class="mb-1">"Tracer Study membantu saya tetap terhubung dengan almamater."</p>
                            <small class="text-muted">- Budi, Alumni 2020</small>
                        </div>
                        <div>
                            <p class="mb-1">"Pengalaman yang berharga untuk berkontribusi pada pengembangan kampus."</p>
                            <small class="text-muted">- Siti, Alumni 2019</small>
                        </div>
                    </div>
                </div>
            
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-unri"><i class="fas fa-question-circle me-2"></i>FAQ</h3>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        Apa itu Tracer Study?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Tracer Study adalah studi pelacakan alumni untuk mengetahui outcome pendidikan dalam bentuk transisi dari dunia pendidikan tinggi ke dunia kerja.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- <div class="col-lg-4">
                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <h3 class="card-title text-unri"><i class="fas fa-info-circle me-2"></i>Informasi Penting</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Batas waktu pengisian
                                <span class="badge bg-unri rounded-pill">30 Nov 2023</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total responden saat ini
                                <span class="badge bg-unri rounded-pill">150 alumni</span>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    Tingkat partisipasi
                                    <span>75%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-unri" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card border-0">
                    <div class="card-body">
                        <h3 class="card-title text-unri"><i class="fas fa-envelope me-2"></i>Kontak</h3>
                        <p>Jika Anda memiliki pertanyaan, silakan hubungi:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-envelope me-2"></i>Email: tracerstudy@unri.ac.id</li>
                            <li><i class="fas fa-phone me-2"></i>Telepon: (0761) 123456</li>
                            <li><i class="fas fa-map-marker-alt me-2"></i>Alamat: Kampus Bina Widya, Simpang Baru, Pekanbaru 28293</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
</x-layout>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Data untuk grafik status lulusan
        const ctx = document.getElementById('employmentChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bekerja', 'Wirausaha', 'Studi Lanjut', 'Mencari Kerja'],
                datasets: [{
                    label: 'Status Lulusan (%)',
                    data: [65, 15, 12, 8],
                    backgroundColor: [
                        'rgba(46, 125, 50, 0.7)',
                        'rgba(67, 160, 71, 0.7)',
                        'rgba(102, 187, 106, 0.7)',
                        'rgba(129, 199, 132, 0.7)'
                    ],
                    borderColor: [
                        'rgba(46, 125, 50, 1)',
                        'rgba(67, 160, 71, 1)',
                        'rgba(102, 187, 106, 1)',
                        'rgba(129, 199, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Status Lulusan Teknik Informatika UNRI'
                    }
                }
            }
        });

        // Data untuk grafik kepuasan lulusan
        const ctxSatisfaction = document.getElementById('satisfactionChart').getContext('2d');
        new Chart(ctxSatisfaction, {
            type: 'doughnut',
            data: {
                labels: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas'],
                datasets: [{
                    data: [40, 35, 20, 5],
                    backgroundColor: [
                        'rgba(46, 125, 50, 0.7)',
                        'rgba(67, 160, 71, 0.7)',
                        'rgba(102, 187, 106, 0.7)',
                        'rgba(129, 199, 132, 0.7)'
                    ],
                    borderColor: [
                        'rgba(46, 125, 50, 1)',
                        'rgba(67, 160, 71, 1)',
                        'rgba(102, 187, 106, 1)',
                        'rgba(129, 199, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    title: {
                        display: true,
                        text: 'Tingkat Kepuasan Lulusan'
                    }
                }
            }
        });
    </script>



