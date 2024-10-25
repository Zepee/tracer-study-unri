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
        }
        
    });

    
    // Data Alumni: Nama, Lokasi, dan Pekerjaan
    var alumniData = [
        { name: "Rizki Santoso", location: [ -6.914744, 107.609810 ], job: "Software Engineer di Bandung" },
        { name: "Dewi Lestari", location: [ -7.250445, 112.768845 ], job: "Data Analyst di Surabaya" },
        { name: "Ahmad Wijaya", location: [ 3.595196, 98.672223 ], job: "Manager Operasional di Medan" },
        { name: "Siti Nurhaliza", location: [ -5.147665, 119.432732 ], job: "Kepala HRD di Makassar" },
        { name: "Budi Setiawan", location: [ -6.966667, 110.416664 ], job: "Financial Advisor di Semarang" },
        { name: "Fitri Hidayat", location: [ -8.670458, 115.212629 ], job: "Senior Web Developer di Denpasar" },
        { name: "Yuni Puspitasari", location: [ -7.795580, 110.369490 ], job: "Project Manager di Yogyakarta" },
        { name: "Andi Saputra", location: [ 0.533333, 101.450000 ], job: "Konsultan IT di Pekanbaru" },
        { name: "Maya Sari Dewi", location: [ -3.318606, 114.594378 ], job: "Marketing Manager di Banjarmasin" },
        { name: "Fajar Kurniawan", location: [ -0.026330, 109.342503 ], job: "Kepala IT di Pontianak" },
        { name: "Lina Kurniawati", location: [ -2.200340, 106.113209 ], job: "Product Manager di Pangkal Pinang" },
        { name: "Teguh Prasetyo", location: [ -3.991694, 122.512974 ], job: "DevOps Engineer di Kendari" },
        { name: "Dedi Saputra", location: [ -5.429320, 105.262287 ], job: "System Analyst di Bandar Lampung" },
        { name: "Rina Pertiwi", location: [ 1.492659, 124.841930 ], job: "UI/UX Designer di Manado" },
        { name: "Asep Maulana", location: [ -6.990360, 110.422769 ], job: "Cybersecurity Specialist di Semarang" },
        { name: "Sari Kusuma", location: [ -7.322350, 108.214941 ], job: "Full Stack Developer di Cirebon" },
        { name: "Dewi Setianingsih", location: [ -6.605800, 106.797245 ], job: "Graphic Designer di Bogor" },
        { name: "Riko Pratama", location: [ -7.816000, 110.373400 ], job: "Cloud Engineer di Yogyakarta" },
        { name: "Vina Rahmawati", location: [ 3.324400, 99.143001 ], job: "Mobile Developer di Sibolga" },
        { name: "Agus Wijaya", location: [ -7.336200, 112.726300 ], job: "Frontend Developer di Gresik" },
        { name: "Tasya Putri", location: [ -7.722000, 110.378700 ], job: "Database Administrator di Yogyakarta" },
        { name: "Bambang Setiawan", location: [ 0.563300, 101.425000 ], job: "Network Engineer di Pekanbaru" },
        { name: "Rizal Firmansyah", location: [ -6.175110, 106.865039 ], job: "Tech Lead di Jakarta" },
        { name: "Tika Ardianti", location: [ -6.186500, 106.828300 ], job: "Data Scientist di Jakarta" },
        { name: "Nina Suryani", location: [ -6.914167, 107.602357 ], job: "Backend Developer di Bandung" },
        { name: "Rudi Hartono", location: [ -8.409518, 115.188919 ], job: "Scrum Master di Bali" },
        { name: "Alif Nurdin", location: [ -5.550000, 105.300000 ], job: "IT Consultant di Lampung" },
        { name: "Ayu Putri", location: [ 1.476494, 125.033199 ], job: "Digital Marketer di Bitung" },
        { name: "Rio Permadi", location: [ 2.082481, 99.863763 ], job: "System Administrator di Sibolga" },
        { name: "Hendra Wijaya", location: [ -7.257500, 112.752083 ], job: "QA Engineer di Surabaya" },
        { name: "Rizki Andriansyah", location: [ -7.655397, 111.512292 ], job: "Penetration Tester di Madiun" },
        { name: "Lilis Suryani", location: [ -6.242227, 107.015785 ], job: "Web Developer di Karawang" },
        { name: "Andika Putra", location: [ 0.507067, 101.447779 ], job: "IT Manager di Pekanbaru" },
        { name: "Fikri Ramadhan", location: [ -7.783308, 110.363033 ], job: "DevOps Engineer di Yogyakarta" },
        { name: "Yuli Rahayu", location: [ -7.269788, 112.742503 ], job: "Content Strategist di Surabaya" },
        { name: "Farhan Ahmad", location: [ -6.889836, 110.642207 ], job: "Software Architect di Semarang" },
        { name: "Indra Pratama", location: [ 1.123736, 104.042359 ], job: "Cloud Specialist di Batam" },
        { name: "Bella Yuniar", location: [ -3.316694, 114.618522 ], job: "HR Manager di Banjarmasin" },
        { name: "Agung Kurniawan", location: [ -7.977778, 112.634722 ], job: "Product Designer di Malang" },
        { name: "Putri Ananda", location: [ -8.658602, 115.174254 ], job: "IT Support di Denpasar" },
        { name: "Yosep Wibowo", location: [ -6.595038, 106.789327 ], job: "Data Engineer di Bogor" },
        { name: "Gilang Ramadhan", location: [ -2.989064, 104.756596 ], job: "System Engineer di Palembang" },
        { name: "Wulan Puspa", location: [ -7.358707, 109.904491 ], job: "Content Manager di Purwokerto" },
        { name: "Ilham Saputra", location: [ -7.629290, 112.909830 ], job: "Tech Support di Pasuruan" },
        { name: "Dina Amelia", location: [ -6.822515, 107.614922 ], job: "SEO Specialist di Bandung" },
        { name: "Iwan Santoso", location: [ 3.577297, 98.683103 ], job: "Mobile Developer di Medan" },
        { name: "Dewi Andriani", location: [ -6.208763, 106.845599 ], job: "Social Media Strategist di Jakarta" },
        { name: "Rahmat Gunawan", location: [ -3.363889, 114.607222 ], job: "IT Trainer di Banjarmasin" },
        { name: "Widya Anggraini", location: [ -2.204700, 106.325800 ], job: "IT Project Manager di Pangkalpinang" },
        { name: "Sigit Nugroho", location: [ -7.801194, 110.364917 ], job: "Full Stack Developer di Yogyakarta" },
        { name: "Ayu Saraswati", location: [ -7.799707, 110.372530 ], job: "Data Analyst di Yogyakarta" },
        { name: "Bagus Prasetyo", location: [ -7.796830, 110.370389 ], job: "Software Engineer di Yogyakarta" },
        { name: "Rina Sari", location: [ -7.807170, 110.365790 ], job: "Graphic Designer di Yogyakarta" },
        { name: "Yuli Andriani", location: [ -7.803284, 110.368710 ], job: "UX/UI Designer di Yogyakarta" },
        { name: "Bambang Setiawan", location: [ -7.799693, 110.374561 ], job: "Network Administrator di Yogyakarta" },
        { name: "Rahmawati", location: [ -7.805012, 110.370738 ], job: "Database Administrator di Yogyakarta" },
        { name: "Agung Pratama", location: [ -7.798911, 110.371468 ], job: "Backend Developer di Yogyakarta" },
        { name: "Dewi Kusuma", location: [ -7.810909, 110.368732 ], job: "Frontend Developer di Yogyakarta" },
        { name: "Joko Susanto", location: [ -7.804892, 110.372893 ], job: "IT Support di Yogyakarta" },
        { name: "Tika Rahma", location: [ -7.809800, 110.364987 ], job: "Cybersecurity Specialist di Yogyakarta" },
        { name: "Yusuf Wibowo", location: [ -7.803831, 110.366251 ], job: "Tech Lead di Yogyakarta" },
        { name: "Sari Indah", location: [ -7.806954, 110.369912 ], job: "Scrum Master di Yogyakarta" },
        { name: "Adi Nugraha", location: [ -7.799128, 110.374019 ], job: "Cloud Engineer di Yogyakarta" },
        { name: "Wahyu Setiawan", location: [ -7.797651, 110.371651 ], job: "Penetration Tester di Yogyakarta" },
        { name: "Andi Kurniawan", location: [ -7.806000, 110.373000 ], job: "System Analyst di Yogyakarta" },
        { name: "Ratna Sari", location: [ -7.799564, 110.372319 ], job: "Product Manager di Yogyakarta" },
        { name: "Dewi Anggraini", location: [ -7.802776, 110.369094 ], job: "Software Architect di Yogyakarta" },
        { name: "Faisal Ramadhan", location: [ -7.804201, 110.370489 ], job: "Mobile Developer di Yogyakarta" },
        { name: "Hendra Susanto", location: [ -7.807631, 110.372133 ], job: "System Engineer di Yogyakarta" },
        { name: "Ilham Hidayat", location: [ -7.799250, 110.366872 ], job: "Frontend Engineer di Yogyakarta" },
        { name: "Rina Kartika", location: [ -7.800180, 110.369114 ], job: "Full Stack Developer di Yogyakarta" },
        { name: "Rudi Hartanto", location: [ -7.804430, 110.367862 ], job: "Database Administrator di Yogyakarta" },
        { name: "Dian Pratama", location: [ -7.802568, 110.374172 ], job: "Cloud Specialist di Yogyakarta" },
        { name: "Indra Wijaya", location: [ -7.798413, 110.371993 ], job: "DevOps Engineer di Yogyakarta" },
        { name: "Rina Maulana", location: [ -7.801239, 110.373040 ], job: "Backend Developer di Yogyakarta" },
        { name: "Yogi Prasetyo", location: [ -7.806251, 110.371102 ], job: "IT Manager di Yogyakarta" },
        { name: "Dewi Andriani", location: [ -7.799442, 110.374112 ], job: "Product Designer di Yogyakarta" },
        { name: "Wahyu Santoso", location: [ -7.800681, 110.368003 ], job: "Tech Support di Yogyakarta" },
        { name: "Agus Pranata", location: [ -7.808954, 110.365774 ], job: "Mobile Developer di Yogyakarta" }
    ];
        
    // Konversi data alumni ke format heatmap (latitude, longitude, intensity)
    var heatData = alumniData.map(function(alumni) {
        return [alumni.location[0], alumni.location[1], 1]; // 1 sebagai intensitas default
    });

    // Membuat dan menambahkan heatmap ke peta
    var heat = L.heatLayer(heatData, { 
        radius: 20,  // Ukuran radius titik panas
        blur: 25,    // Efek blur
        maxZoom: 1  // Zoom maksimal untuk menampilkan heatmap
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

