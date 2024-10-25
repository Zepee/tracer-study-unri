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

    
    // Data Alumni: Nama, Lokasi, dan Pekerjaan
    var alumniData = [
        { name: "Rizki Santoso", company: "PT ABC", location: [ -6.914744, 107.609810 ], job: "Software Engineer", province: "Jawa Barat", city: "Bandung", graduationYear: 2020 },
        { name: "Dewi Lestari", company: "PT XYZ", location: [ -7.250445, 112.768845 ], job: "Data Analyst", province: "Jawa Timur", city: "Surabaya", graduationYear: 2018 },
        { name: "Ahmad Wijaya", company: "PT DEF", location: [ 3.595196, 98.672223 ], job: "Manager Operasional", province: "Sumatera Utara", city: "Medan", graduationYear: 2019 },
        { name: "Siti Nurhaliza", company: "PT GHI", location: [ -5.147665, 119.432732 ], job: "Kepala HRD", province: "Sulawesi Selatan", city: "Makassar", graduationYear: 2021 },
        { name: "Budi Setiawan", company: "PT JKL", location: [ -6.966667, 110.416664 ], job: "Financial Advisor", province: "Jawa Tengah", city: "Semarang", graduationYear: 2022 },
        { name: "Fitri Hidayat", company: "PT MNO", location: [ -8.670458, 115.212629 ], job: "Senior Web Developer", province: "Bali", city: "Denpasar", graduationYear: 2020 },
        // Daerah Riau
        { name: "Andi Saputra", company: "PT PQR", location: [ 0.533333, 101.450000 ], job: "Konsultan IT", province: "Riau", city: "Pekanbaru", graduationYear: 2019 },
        { name: "Nur Aini", company: "PT STU", location: [ 0.599571, 100.993670 ], job: "Backend Developer", province: "Riau", city: "Dumai", graduationYear: 2020 },
        { name: "Doni Firmansyah", company: "PT VWX", location: [ 0.520000, 101.450000 ], job: "Frontend Developer", province: "Riau", city: "Pekanbaru", graduationYear: 2021 },
        { name: "Zainul Abidin", company: "PT YZA", location: [ 0.699571, 100.993670 ], job: "IT Support", province: "Riau", city: "Dumai", graduationYear: 2018 },
        { name: "Rina Amelia", company: "PT BCD", location: [ 0.533333, 101.450000 ], job: "Mobile Developer", province: "Riau", city: "Pekanbaru", graduationYear: 2022 },
        { name: "Putri Larasati", company: "PT EFG", location: [ 0.633333, 101.150000 ], job: "Data Analyst", province: "Riau", city: "Siak", graduationYear: 2020 },
        { name: "Budi Haryono", company: "PT HIJ", location: [ 0.333333, 101.450000 ], job: "System Engineer", province: "Riau", city: "Pelalawan", graduationYear: 2019 },
        { name: "Yulia Kartika", company: "PT KLM", location: [ 0.733333, 101.350000 ], job: "Database Administrator", province: "Riau", city: "Kampar", graduationYear: 2021 },
        { name: "Syahrul Gunawan", company: "PT NOP", location: [ 0.433333, 101.650000 ], job: "Network Engineer", province: "Riau", city: "Bengkalis", graduationYear: 2020 },
        { name: "Maya Putri", company: "PT QRS", location: [ 0.333333, 101.750000 ], job: "Full Stack Developer", province: "Riau", city: "Rokan Hilir", graduationYear: 2022 },
        { name: "Hendra Wijaya", company: "PT TUV", location: [ 0.533333, 101.650000 ], job: "Tech Support", province: "Riau", city: "Pekanbaru", graduationYear: 2021 },
        // Daerah Jawa
        { name: "Rina Puspita", company: "PT BCD", location: [ -6.21462, 106.84513 ], job: "Cloud Engineer", province: "DKI Jakarta", city: "Jakarta", graduationYear: 2020 },
        { name: "Bambang Irawan", company: "PT EFG", location: [ -7.559575, 110.822940 ], job: "Mobile Developer", province: "Jawa Tengah", city: "Magelang", graduationYear: 2019 },
        { name: "Desi Lestari", company: "PT HIJ", location: [ -6.917464, 107.619123 ], job: "DevOps Engineer", province: "Jawa Barat", city: "Bandung", graduationYear: 2018 },
        { name: "Ahmad Rahman", company: "PT KLM", location: [ -6.120000, 106.150000 ], job: "Frontend Developer", province: "Banten", city: "Tangerang", graduationYear: 2020 },
        { name: "Rudi Hartanto", company: "PT NOP", location: [ -6.175110, 106.865039 ], job: "Data Scientist", province: "DKI Jakarta", city: "Jakarta", graduationYear: 2021 },
        { name: "Siti Aminah", company: "PT QRS", location: [ -7.966620, 112.632632 ], job: "IT Consultant", province: "Jawa Timur", city: "Malang", graduationYear: 2020 },
        { name: "Yudi Kurniawan", company: "PT TUV", location: [ -6.932907, 107.634398 ], job: "Product Manager", province: "Jawa Barat", city: "Bandung", graduationYear: 2019 },
        { name: "Ayu Wulandari", company: "PT VWX", location: [ -7.801389, 110.364722 ], job: "Project Manager", province: "DI Yogyakarta", city: "Yogyakarta", graduationYear: 2018 },
        { name: "Toni Prasetyo", company: "PT YZA", location: [ -8.3405, 115.092 ], job: "Tech Lead", province: "Bali", city: "Denpasar", graduationYear: 2020 },
        { name: "Fitri Andini", company: "PT ABC", location: [ -7.966620, 112.632632 ], job: "Scrum Master", province: "Jawa Timur", city: "Malang", graduationYear: 2022 },
        // Tambahan lainnya dari seluruh Indonesia
        { name: "Lia Kusuma", company: "PT DEF", location: [ 3.595196, 98.672223 ], job: "Penetration Tester", province: "Sumatera Utara", city: "Medan", graduationYear: 2019 },
        { name: "Dian Sari", company: "PT GHI", location: [ -2.990934, 104.775431 ], job: "System Administrator", province: "Sumatera Selatan", city: "Palembang", graduationYear: 2020 },
        { name: "Mira Setyaningsih", company: "PT JKL", location: [ -5.429320, 105.262287 ], job: "SEO Specialist", province: "Lampung", city: "Bandar Lampung", graduationYear: 2021 },
        { name: "Rizal Gunawan", company: "PT MNO", location: [ -8.579892, 116.095239 ], job: "Cybersecurity Analyst", province: "Nusa Tenggara Barat", city: "Mataram", graduationYear: 2022 },
        { name: "Bayu Mahardika", company: "PT PQR", location: [ -3.336743, 114.591071 ], job: "IT Trainer", province: "Kalimantan Selatan", city: "Banjarmasin", graduationYear: 2018 },
        { name: "Tari Lestari", company: "PT STU", location: [ 1.484600, 125.527000 ], job: "Data Engineer", province: "Sulawesi Utara", city: "Manado", graduationYear: 2020 },
        { name: "Arif Budiman", company: "PT VWX", location: [ -3.990743, 122.512974 ], job: "Data Analyst", province: "Sulawesi Tenggara", city: "Kendari", graduationYear: 2021 },
        { name: "Lisa Anggraini", company: "PT YZA", location: [ -2.533333, 140.716667 ], job: "Tech Support", province: "Papua", city: "Jayapura", graduationYear: 2022 },
        { name: "Rahmat Santoso", company: "PT ABC", location: [ 3.589665, 98.673805 ], job: "Frontend Developer", province: "Sumatera Utara", city: "Medan", graduationYear: 2020 },
        { name: "Desi Pratiwi", company: "PT DEF", location: [ -3.991694, 122.512974 ], job: "System Analyst", province: "Sulawesi Tenggara", city: "Kendari", graduationYear: 2020 },
        // Daerah Sumatera dan Kalimantan
        { name: "Eko Supriyadi", company: "PT GHI", location: [ -0.789275, 113.921327 ], job: "Cloud Specialist", province: "Kalimantan Tengah", city: "Palangkaraya", graduationYear: 2021 },
        { name: "Farah Fauziah", company: "PT JKL", location: [ -1.601160, 102.247220 ], job: "Mobile Developer", province: "Jambi", city: "Jambi", graduationYear: 2019 },
        { name: "Wahyu Kurnia", company: "PT MNO", location: [ 0.533333, 101.450000 ], job: "Network Engineer", province: "Riau", city: "Pekanbaru", graduationYear: 2021 },
        { name: "Dinda Safitri", company: "PT PQR", location: [ 0.433333, 101.750000 ], job: "Full Stack Developer", province: "Riau", city: "Rokan Hilir", graduationYear: 2022 },
        { name: "Feri Handoko", company: "PT STU", location: [ 1.480000, 101.683333 ], job: "IT Consultant", province: "Riau", city: "Siak", graduationYear: 2020 },
        // Tambahan alumni lainnya (acak di Indonesia)
        { name: "Hendra Nugroho", company: "PT XYZ", location: [ -3.316694, 114.618522 ], job: "System Engineer", province: "Kalimantan Selatan", city: "Banjarmasin", graduationYear: 2021 },
        { name: "Taufik Ismail", company: "PT YZA", location: [ -6.120000, 106.150000 ], job: "Backend Developer", province: "Banten", city: "Tangerang", graduationYear: 2018 },
        { name: "Siti Maryam", company: "PT ABC", location: [ -6.932907, 107.634398 ], job: "Data Scientist", province: "Jawa Barat", city: "Bandung", graduationYear: 2020 },
        { name: "Dewi Anggraeni", company: "PT DEF", location: [ -8.3405, 115.092 ], job: "Cybersecurity Specialist", province: "Bali", city: "Denpasar", graduationYear: 2021 },
        { name: "Ali Mahmud", company: "PT GHI", location: [ -7.966620, 112.632632 ], job: "Full Stack Developer", province: "Jawa Timur", city: "Malang", graduationYear: 2022 }
    ];    

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
        console.log("Filtered Data:", filteredData);
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
        radius: 18  ,  // Ukuran radius titik panas
        blur: 25,    // Efek blur
        maxZoom: 5  // Zoom maksimal untuk menampilkan heatmap
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

