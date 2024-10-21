<x-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    </style>

    <x-slot name="header">
        Pengumuman
    </x-slot>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <h2 class="card-title text-unri mb-4 col-8"><i class="fas fa-bullhorn me-2"></i>Pengumuman Terbaru</h2>

                        <div class="mb-4">
                            <h3 class="h4 mb-3">Pengumuman Tracer Study Teknik Informatika UNRI 2023</h3>
                            <p class="text-muted mb-2">Tim Tracer Study | 21 Oktober 2023</p>
                            <p>Kepada seluruh alumni Teknik Informatika Universitas Riau, kami mengundang Anda untuk berpartisipasi dalam Tracer Study 2023. Partisipasi Anda sangat berharga bagi pengembangan program studi dan peningkatan kualitas lulusan kami.</p>
                            <a href="#" class="text-unri">Baca selengkapnya »</a>
                        </div>

                        <div class="mb-4">
                            <h3 class="h4">Periode Pengisian Tracer Study</h3>
                            <p class="text-muted mb-2">Tim Tracer Study | 20 Oktober 2023</p>
                            <p>Kami informasikan bahwa periode pengisian Tracer Study 2023 akan berlangsung dari tanggal 1 November hingga 30 November 2023. Mohon partisipasi aktif dari seluruh alumni.</p>
                            <a href="#" class="text-unri">Baca selengkapnya »</a>
                        </div>

                        <div>
                            <h3 class="h4">Pentingnya Data Tracer Study</h3>
                            <p class="text-muted mb-2">Ketua Program Studi | 19 Oktober 2023</p>
                            <p>Data Tracer Study sangat penting untuk evaluasi dan pengembangan kurikulum. Kami mengajak seluruh alumni untuk berkontribusi dalam peningkatan kualitas pendidikan di Teknik Informatika UNRI.</p>
                            <a href="#" class="text-unri">Baca selengkapnya »</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <h2 class="card-title text-unri"><i class="fas fa-chart-bar me-2"></i>Statistik Performa Lulusan</h2>
                        <canvas id="employmentChart"></canvas>
                    </div>
                </div>

                <div class="card mb-4 border-0">
                    <div class="card-body">
                        <h2 class="card-title text-unri"><i class="fas fa-graduation-cap me-2"></i>Tingkat Kepuasan Lulusan</h2>
                        <canvas id="satisfactionChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
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
            </div>
        </div>
    </div>

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
</x-layout>




