const alumniData = [
    {
        name: "Rizki Santoso",
        company: "PT ABC",
        location: [ -6.914744, 107.609810 ],
        job: "Software Engineer",
        province: "Jawa Barat",
        city: "Bandung",
        graduationYear: 2020,
        email: "rizki.santoso@abc.com",
        no_hp: "081234567890",
        linkedin: "https://www.linkedin.com/in/rizki-santoso",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Saya adalah seorang Software Engineer dengan fokus pada pengembangan aplikasi berbasis web dan mobile. Berpengalaman dalam teknologi modern untuk membangun sistem yang efisien dan mudah diakses.",
        keahlian: ["JavaScript", "React", "Node.js", "Database Management", "Cloud Computing"],
        pendidikan: "Universitas Indonesia, Teknik Informatika (2016 - 2020)",
        pengalaman: [
            {
                title: "Software Engineer",
                company: "PT ABC",
                period: "Januari 2021 - Sekarang",
                description: "Mengembangkan dan memelihara aplikasi web perusahaan serta mengimplementasikan fitur-fitur baru yang dibutuhkan oleh klien."
            },
            {
                title: "Frontend Developer Intern",
                company: "PT Teknologi Cerdas",
                period: "Juli 2020 - Desember 2020",
                description: "Membangun antarmuka pengguna untuk aplikasi internal dengan React dan mengoptimalkan kinerja aplikasi."
            }
        ]
    },
    {
        name: "Dewi Lestari",
        company: "PT XYZ",
        location: [ -7.250445, 112.768845 ],
        job: "Data Analyst",
        province: "Jawa Timur",
        city: "Surabaya",
        graduationYear: 2018,
        email: "dewi.lestari@xyz.com",
        no_hp: "082134567891",
        linkedin: "https://www.linkedin.com/in/dewi-lestari",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Seorang Data Analyst dengan keahlian dalam pengolahan data besar dan visualisasi data. Berpengalaman menggunakan Python dan SQL untuk menganalisis dan menampilkan data yang berguna bagi perusahaan.",
        keahlian: ["Python", "SQL", "Data Visualization", "Machine Learning", "Big Data"],
        pendidikan: "Institut Teknologi Sepuluh Nopember, Statistik (2014 - 2018)",
        pengalaman: [
            {
                title: "Data Analyst",
                company: "PT XYZ",
                period: "Maret 2019 - Sekarang",
                description: "Menganalisis data untuk meningkatkan efisiensi perusahaan dan membuat laporan visualisasi data yang informatif."
            },
            {
                title: "Research Assistant",
                company: "Universitas",
                period: "Agustus 2018 - Februari 2019",
                description: "Membantu dalam penelitian data statistik dan mengembangkan model prediksi untuk penelitian akademis."
            }
        ]
    },
    {
        name: "Ahmad Wijaya",
        company: "PT DEF",
        location: [ 3.595196, 98.672223 ],
        job: "Manager Operasional",
        province: "Sumatera Utara",
        city: "Medan",
        graduationYear: 2019,
        email: "ahmad.wijaya@def.com",
        no_hp: "083134567892",
        linkedin: "https://www.linkedin.com/in/ahmad-wijaya",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Seorang Manager Operasional yang memiliki pengalaman dalam manajemen tim dan peningkatan efisiensi operasional perusahaan.",
        keahlian: ["Operational Management", "Project Planning", "Team Leadership", "Supply Chain Management"],
        pendidikan: "Universitas Sumatera Utara, Manajemen Bisnis (2015 - 2019)",
        pengalaman: [
            {
                title: "Manager Operasional",
                company: "PT DEF",
                period: "Mei 2020 - Sekarang",
                description: "Mengelola operasi harian dan memastikan efisiensi dalam setiap proses produksi perusahaan."
            }
        ]
    },
    {
        name: "Budi Setiawan",
        company: "PT JKL",
        location: [ -6.966667, 110.416664 ],
        job: "Financial Advisor",
        province: "Jawa Tengah",
        city: "Semarang",
        graduationYear: 2022,
        email: "budi.setiawan@jkl.com",
        no_hp: "085134567894",
        linkedin: "https://www.linkedin.com/in/budi-setiawan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Seorang Financial Advisor yang berfokus pada perencanaan keuangan dan manajemen investasi untuk klien pribadi dan korporat.",
        keahlian: ["Financial Planning", "Investment Strategy", "Risk Management", "Wealth Management"],
        pendidikan: "Universitas Gadjah Mada, Ekonomi (2018 - 2022)",
        pengalaman: [
            {
                title: "Financial Advisor",
                company: "PT JKL",
                period: "Juni 2022 - Sekarang",
                description: "Menyusun strategi investasi dan perencanaan keuangan untuk klien dengan berbagai latar belakang."
            }
        ]
    },
    {
        name: "Siti Nurhaliza",
        company: "PT GHI",
        location: [ -5.147665, 119.432732 ],
        job: "Kepala HRD",
        province: "Sulawesi Selatan",
        city: "Makassar",
        graduationYear: 2021,
        email: "siti.nurhaliza@ghi.com",
        no_hp: "084134567893",
        linkedin: "https://www.linkedin.com/in/siti-nurhaliza",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Profesional di bidang Sumber Daya Manusia yang berpengalaman dalam rekrutmen, pelatihan, dan pengembangan karyawan.",
        keahlian: ["Human Resources Management", "Recruitment", "Training & Development", "Employee Relations"],
        pendidikan: "Universitas Hasanuddin, Psikologi (2017 - 2021)",
        pengalaman: [
            {
                title: "Kepala HRD",
                company: "PT GHI",
                period: "April 2021 - Sekarang",
                description: "Mengelola rekrutmen dan pengembangan karyawan serta memastikan kesejahteraan dan hubungan kerja yang baik di perusahaan."
            }
        ]
    },
    {
        name: "Fitri Hidayat",
        company: "PT MNO",
        location: [ -8.670458, 115.212629 ],
        job: "Senior Web Developer",
        province: "Bali",
        city: "Denpasar",
        graduationYear: 2020,
        email: "fitri.hidayat@mno.com",
        no_hp: "086134567895",
        linkedin: "https://www.linkedin.com/in/fitri-hidayat",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Web Developer yang fokus pada pengembangan aplikasi web responsif dan optimasi kinerja website.",
        keahlian: ["HTML", "CSS", "JavaScript", "React", "Web Optimization"],
        pendidikan: "Universitas Udayana, Teknologi Informasi (2016 - 2020)",
        pengalaman: [
            {
                title: "Senior Web Developer",
                company: "PT MNO",
                period: "Februari 2021 - Sekarang",
                description: "Bertanggung jawab dalam membangun dan mengoptimalkan aplikasi web untuk klien lokal dan internasional."
            },
            {
                title: "Junior Web Developer",
                company: "PT Digital Bali",
                period: "Mei 2020 - Januari 2021",
                description: "Membantu pengembangan website dengan fokus pada UI/UX dan performa web."
            }
        ]
    },
    {
        name: "Taufik Ramadhan",
        company: "PT OPQ",
        location: [ -3.316694, 114.618522 ],
        job: "Network Engineer",
        province: "Kalimantan Selatan",
        city: "Banjarmasin",
        graduationYear: 2019,
        email: "taufik.ramadhan@opq.com",
        no_hp: "087123456789",
        linkedin: "https://www.linkedin.com/in/taufik-ramadhan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Network Engineer berpengalaman yang bertanggung jawab atas keamanan dan stabilitas jaringan perusahaan.",
        keahlian: ["Network Design", "Cybersecurity", "Firewall Management", "Troubleshooting"],
        pendidikan: "Politeknik Negeri Banjarmasin, Teknik Komputer dan Jaringan (2015 - 2019)",
        pengalaman: [
            {
                title: "Network Engineer",
                company: "PT OPQ",
                period: "Agustus 2019 - Sekarang",
                description: "Merancang dan mengelola infrastruktur jaringan untuk mendukung operasional perusahaan."
            }
        ]
    },
    {
        name: "Linda Dewi",
        company: "PT RST",
        location: [ -7.801389, 110.364444 ],
        job: "Digital Marketing Specialist",
        province: "Yogyakarta",
        city: "Yogyakarta",
        graduationYear: 2021,
        email: "linda.dewi@rst.com",
        no_hp: "088134567896",
        linkedin: "https://www.linkedin.com/in/linda-dewi",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Digital Marketing Specialist yang fokus pada kampanye pemasaran digital dan optimasi media sosial.",
        keahlian: ["Social Media Management", "SEO", "Content Marketing", "Google Analytics"],
        pendidikan: "Universitas Gadjah Mada, Ilmu Komunikasi (2017 - 2021)",
        pengalaman: [
            {
                title: "Digital Marketing Specialist",
                company: "PT RST",
                period: "Juni 2021 - Sekarang",
                description: "Mengelola kampanye digital dan mengoptimalkan kehadiran online perusahaan melalui berbagai platform."
            }
        ]
    }    
];


window.showDetails = function(index) {
    const alumni = alumniData[index];
    const modalContent = document.getElementById("modalContent");

    // Isi konten modal dengan data alumni yang dipilih
    modalContent.innerHTML = `
        <div class="row">
            <!-- Kolom Kiri -->
            <div class="col-md-5 text-center">
                <img src="${alumni.photoUrl}" alt="${alumni.name}" class="img-fluid mb-3" style="width: 200px; height: 250px; object-fit: cover; border-radius: 10px;">
                <h4 class="mt-2">${alumni.name}</h4>
                
                <h5 class="mt-4">Tentang Saya</h5>
                <p>${alumni.tentangSaya}</p>

                <h5 class="mt-4">Keahlian</h5>
                <p>${alumni.keahlian.join(', ')}</p>

                <h5 class="mt-4">Kontak</h5>
                <p>Email: ${alumni.email} <br> No. HP: ${alumni.no_hp} <br> LinkedIn: <a href="${alumni.linkedin}" target="_blank">Profil LinkedIn</a></p>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-7">
                <h5>Pendidikan</h5>
                <p>${alumni.pendidikan}</p>

                <h5 class="mt-4">Pengalaman</h5>
                <ul>
                    ${alumni.pengalaman.map(exp => `
                        <li>
                            <strong>${exp.title}</strong> di ${exp.company} (${exp.period}) <br>
                            ${exp.description}
                        </li>
                    `).join('')}
                </ul>
            </div>
        </div>
    `;

    // Tampilkan modal
    $('#detailModal').modal('show');
};

// Button Close Modal
document.querySelector(".close").addEventListener("click", function() {
    $('#detailModal').modal('hide');
});

document.addEventListener('DOMContentLoaded', function() {
    // Kode Leaflet dan lainnya di sini
    var map = L.map('map').setView([-2.5, 118], 5);
    
    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://carto.com/attributions">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 19
    }).addTo(map);

    // Variable untuk menyimpan layer yang di-highlight
    var highlightedLayer, highlightedProvinceLayer;

    // Variable untuk menyimpan referensi semua layer provinsi dan kota
    var provinceLayers = {};
    var cityLayers = {};

    // Style default untuk reset
    var defaultStyle = {
        fillColor: 'transparent', // Tidak ada fill color untuk kota yang tidak terpilih
        color: '#ff7800', // Warna garis tepi standar
        weight: 1
    };

    // Style untuk provinsi
    var provinceStyle = {
        fillColor: 'transparent', // Tidak ada fill color untuk provinsi
        color: '#000000', // Warna garis tepi provinsi
        weight: 2
    };

    // Style untuk provinsi yang di-highlight
    var highlightProvinceStyle = {
        color: '#3f3f3f', 
        weight: 4
    };

    // Memuat file GeoJSON batas provinsi
    $.getJSON('/geojson/provinsi.geojson', function(provinsiData) {
        L.geoJson(provinsiData, {
            style: provinceStyle, // Setel style awal untuk provinsi
            onEachFeature: function (feature, layer) {
                // Tambahkan provinsi ke dalam dropdown
                if (feature.properties && feature.properties.NAME_1) {
                    $('#provinceSelect').append(
                        '<option value="' + feature.properties.NAME_1 + '">' + feature.properties.NAME_1 + '</option>'
                    );

                    // Simpan layer provinsi dengan nama sebagai kuncinya
                    provinceLayers[feature.properties.NAME_1] = layer;

                    // Menambahkan event click ke setiap provinsi
                    layer.on({
                        click: function(e) {
                            highlightProvince(layer);

                            // Update dropdown provinsi saat provinsi di klik
                            $('#provinceSelect').val(feature.properties.NAME_1).trigger('change');
                            
                            // Munculkan layer kota terkait provinsi yang dipilih
                            showCityLayer(feature.properties.NAME_1);
                        }
                    });
                }
            }
        }).addTo(map);
        
    });

    // Memuat file GeoJSON batas kota
    $.getJSON('/geojson/kota.geojson', function(kotaData) { 
        L.geoJson(kotaData, {
            style: defaultStyle, // Setel style awal untuk kota
            onEachFeature: function (feature, layer) {
                // Simpan layer kota dengan provinsi sebagai kuncinya
                if (feature.properties && feature.properties.NAME_2 && feature.properties.NAME_1) { 
                    if (!cityLayers[feature.properties.NAME_1]) {
                        cityLayers[feature.properties.NAME_1] = [];
                    }
                    cityLayers[feature.properties.NAME_1].push({
                        name: feature.properties.NAME_2,
                        layer: layer
                    });

                    // Pastikan layer kota tidak ditambahkan ke peta saat load awal
                    layer.remove();
                    layer.on({
                        click: function(e) {
                            highlightCity(layer);
                            // Update dropdown kota dan provinsi saat kota di klik
                            $('#provinceSelect').val(feature.properties.NAME_1).trigger('change');
                            $('#citySelect').val(feature.properties.NAME_2).trigger('change');
                        }
                    });
                }
            }
        });
    });

    function highlightProvince(layer) {
        // Reset highlight dari provinsi sebelumnya jika ada
        if (highlightedProvinceLayer) {
            highlightedProvinceLayer.setStyle(provinceStyle);
        }
    
        layer.setStyle({
            fillColor: '#3f3f3f', // Warna fill saat di-highlight
            color: '#000000',     // Warna garis tepi saat di-highlight
            weight: 4,
            fillOpacity: 0.3
        });
        map.fitBounds(layer.getBounds());
        highlightedProvinceLayer = layer;
    
        // Update dropdown kota berdasarkan provinsi yang dipilih
        var selectedProvince = layer.feature.properties.NAME_1;
        $('#citySelect').empty().append('<option value="">Pilih Kota</option>');
    
        if (cityLayers[selectedProvince]) {
            cityLayers[selectedProvince].forEach(function(city) {
                $('#citySelect').append('<option value="' + city.name + '">' + city.name + '</option>');
            });
            $('#citySelect').prop('disabled', false);
        } else {
            $('#citySelect').prop('disabled', true);
        }
    
        // Panggil trigger('change') untuk memaksa UI dropdown kota di-update
        $('#citySelect').trigger('change');
    }    

    // Memastikan layer kota dihapus dan ditambahkan sesuai provinsi
    function showCityLayer(provinceName) {
        if (cityLayers[provinceName]) {
            // Hapus semua layer kota yang aktif
            for (let key in cityLayers) {
                cityLayers[key].forEach(function(cityObj) {
                    map.removeLayer(cityObj.layer); // Hapus semua layer kota
                });
            }

            // Tambahkan layer kota yang sesuai dengan provinsi yang dipilih
            cityLayers[provinceName].forEach(function(cityObj) {
                map.addLayer(cityObj.layer); // Tampilkan layer kota dari provinsi yang dipilih
                
                // Debug event klik kota
                cityObj.layer.on({
                    click: function(e) {
                        highlightCity(cityObj.layer);
                    }
                });
            });
        }
    }

    // Fungsi untuk highlight kota yang dipilih
    function highlightCity(layer) {
        // Reset highlight dari kota sebelumnya jika ada
        if (highlightedLayer) {
            highlightedLayer.setStyle(defaultStyle);
        }

        layer.setStyle({
            fillColor: '#e42e2e', // Warna fill saat di-highlight
            color: '#000000',     // Warna garis tepi saat di-highlight
            weight: 5,
            fillOpacity: 0.7
        });

        map.fitBounds(layer.getBounds());
        highlightedLayer = layer;
    }

    // Event listener untuk provinsi
    $('#provinceSelect').change(function() {
        var provinceName = $(this).val();

        if (provinceName && provinceLayers[provinceName]) {
            var layer = provinceLayers[provinceName];
            highlightProvince(layer);

            // Tampilkan layer kota yang sesuai
            showCityLayer(provinceName);

            // Panggil filter alumni saat provinsi diubah
            filterAlumni(); 
        }
    });

    // Event listener untuk dropdown kota
    $('#citySelect').change(function() {
        var cityName = $(this).val();
        var selectedProvince = $('#provinceSelect').val();

        // Jika ada kota yang dipilih
        if (cityName && selectedProvince && cityLayers[selectedProvince]) {
            var cityLayer = cityLayers[selectedProvince].find(function(city) {
                return city.name === cityName;
            }).layer;

            highlightCity(cityLayer);

            // Panggil filter alumni saat kota diubah
            filterAlumni(); 
        }
        
    });

    function renderTable(data) {
        const tableBody = document.querySelector("#datatables tbody");
        tableBody.innerHTML = "";
    
        if (data.length === 0) {
            tableBody.innerHTML = `<tr><td colspan="7" class="text-center">Tidak ada data</td></tr>`;
        } else {
            data.forEach((alumni, index) => {
                const row = `
                    <tr>
                        <td class="text-center">${index + 1}</td>
                        <td class="text-center">${alumni.name}</td>
                        <td class="text-center">${alumni.job}</td>
                        <td class="text-center">${alumni.company}</td>
                        <td class="text-center">${alumni.province}</td>
                        <td class="text-center">${alumni.city}</td>
                        <td class="text-center">${alumni.graduationYear}</td>
                        <td class="text-center">
                            <div class="d-flex gap-2 justify-content-center">
                                <button class="btn btn-info btn-sm" onclick="showDetails(${index})" data-toggle="modal" data-target="#detailModal">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }
    }

    // Populate dropdown perusahaan dan tahun lulus secara dinamis
    function populateDropdowns() {
        const companySet = new Set();
        const yearSet = new Set();
    
        alumniData.forEach(alumni => {
            companySet.add(alumni.company);
            yearSet.add(alumni.graduationYear);
        });
    
        const companySelect = document.querySelector('#companySelect');
        companySelect.innerHTML = '<option value="">Semua</option>';
        companySet.forEach(company => {
            companySelect.innerHTML += `<option value="${company}">${company}</option>`;
        });
    
        const yearSelect = document.querySelector('#yearSelect');
        yearSelect.innerHTML = '<option value="">Semua</option>';
        yearSet.forEach(year => {
            yearSelect.innerHTML += `<option value="${year}">${year}</option>`;
        });
    }
    
    populateDropdowns();
    
    // Function to filter alumni based on user input
    function filterAlumni() {
        const selectedProvince = $('#provinceSelect').val();
        const selectedCity = $('#citySelect').val();
        const nameFilter = $('#filterName').val().toLowerCase(); // Input text untuk nama
        const selectedCompany = $('#companySelect').val(); // Dropdown perusahaan
        const selectedYear = $('#yearSelect').val(); // Dropdown tahun lulus
    
        const filteredData = alumniData.filter(alumni => {
            const matchProvince = selectedProvince === "" || alumni.province === selectedProvince;
            const matchCity = selectedCity === "" || alumni.city === selectedCity;
            const matchName = nameFilter === "" || alumni.name.toLowerCase().includes(nameFilter); // Filter berdasarkan input nama
            const matchCompany = selectedCompany === "" || alumni.company === selectedCompany; // Filter perusahaan
            const matchYear = selectedYear === "" || alumni.graduationYear.toString() === selectedYear; // Filter tahun lulus
            return matchProvince && matchCity && matchName && matchCompany && matchYear;
        });
    
        renderTable(filteredData); // Render ulang tabel dengan data yang difilter
        updateMap(filteredData); // Update peta berdasarkan hasil filter
        console.log("Filtered Data:", filteredData);
    }
    
    // Function to update map with filtered data
    function updateMap(filteredData) {
        // Hapus heatmap dan marker lama dari peta
        if (heat) {
            map.removeLayer(heat);
        }
        if (alumniMarkersCluster) {
            map.removeLayer(alumniMarkersCluster);
        }
    
        // Update heatmap data dengan data yang terfilter
        const heatData = filteredData.map(alumni => [alumni.location[0], alumni.location[1], 1]);
    
        // Gambar ulang heatmap berdasarkan hasil filter
        heat = L.heatLayer(heatData, { 
            radius: 18,
            blur: 25,
            maxZoom: 5
        }).addTo(map);
    
        // Update marker cluster dengan data yang terfilter
        alumniMarkersCluster = L.markerClusterGroup();
        filteredData.forEach(function(alumni) {
            var marker = L.marker(alumni.location);
    
            // Menambahkan marker ke cluster
            alumniMarkersCluster.addLayer(marker);
    
            // Menambahkan popup dengan informasi alumni
            marker.bindPopup("<b>" + alumni.name + "</b><br>" + alumni.job);
        });
    
        // Tambahkan marker cluster yang baru ke peta
        map.addLayer(alumniMarkersCluster);
    }
    
    // Event listeners for input changes
    $('#filterName').on('input', filterAlumni); // Trigger filterAlumni setiap kali nama diinput
    $('#companySelect').on('change', filterAlumni); // Filter saat perusahaan diubah
    $('#yearSelect').on('change', filterAlumni); // Filter saat tahun lulus diubah
    $('#provinceSelect').on('change', filterAlumni); // Filter saat provinsi diubah
    $('#citySelect').on('change', filterAlumni); // Filter saat kota diubah
    
    // Panggil fungsi render pertama kali untuk menampilkan semua data
    renderTable(alumniData);
    
    // Panggil fungsi filter pertama kali untuk menampilkan semua data
    filterAlumni(); // Tampilkan semua data saat pertama kali halaman dibuka

    // Konversi data alumni ke format heatmap (latitude, longitude, intensity)
    var heatData = alumniData.map(function(alumni) {
        return [alumni.location[0], alumni.location[1], 1]; // 1 sebagai intensitas default
    });
    
    // Membuat dan menambahkan heatmap ke peta
    var heat = L.heatLayer(heatData, { 
        radius: 20,
        blur: 25,
        maxZoom: 5
    }).addTo(map);
    
    var alumniMarkersCluster = L.markerClusterGroup(); // Membuat cluster group
    
    // Looping alumni dan membuat marker
    alumniData.forEach(function(alumni) {
        var marker = L.marker(alumni.location);
        
        // Menambahkan marker ke cluster
        alumniMarkersCluster.addLayer(marker);
        
        // Menambahkan popup dengan informasi alumni
        marker.bindPopup("<b>" + alumni.name + "</b><br>" + alumni.job);
    });
    
    // Menambahkan marker cluster ke peta
    map.addLayer(alumniMarkersCluster);
    
});

