document.addEventListener('DOMContentLoaded', function() {
    // Kode Leaflet dan lainnya di sini
    var map = L.map('map').setView([-2.5, 118], 5);
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
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
        color: '#3f3f3f', // Warna biru untuk provinsi yang di-highlight
        weight: 4
    };

    // Memuat file GeoJSON batas provinsi
    $.getJSON('/geojson/provinsi.geojson', function(provinsiData) {
        console.log('Provinsi data loaded:', provinsiData);
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
                        }
                    });
                }
            }
        }).addTo(map);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("Error loading provinsi data:", textStatus, errorThrown);
    });

    // Memuat file GeoJSON batas kota
    $.getJSON('/geojson/kota.geojson', function(kotaData) {
        console.log('Kota data loaded:', kotaData);
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

                    // Menambahkan event click ke setiap kota
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
        }).addTo(map);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("Error loading kota data:", textStatus, errorThrown);
    });

    // Fungsi untuk highlight provinsi yang dipilih
    function highlightProvince(layer) {
        // Reset highlight dari provinsi sebelumnya jika ada
        if (highlightedProvinceLayer) {
            highlightedProvinceLayer.setStyle(provinceStyle);
        }

        layer.setStyle({
            fillColor: '#3f3f3f', // Warna fill saat di-highlight diubah menjadi #e42e2e
            color: '#000000', // Warna garis tepi saat di-highlight
            weight: 4,
            fillOpacity: 0.3
        }); // Warna baru untuk provinsi yang di-highlight
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
    }

    // Fungsi untuk highlight kota yang dipilih
    function highlightCity(layer) {
        // Reset highlight dari kota sebelumnya jika ada
        if (highlightedLayer) {
            highlightedLayer.setStyle(defaultStyle);
        }

        layer.setStyle({
            fillColor: '#e42e2e', // Warna fill saat di-highlight diubah menjadi #e42e2e
            color: '#000000', // Warna garis tepi saat di-highlight
            weight: 5,
            fillOpacity: 0.7
        });

        map.fitBounds(layer.getBounds());
        highlightedLayer = layer;
    }

    // Event listener untuk dropdown provinsi
    $('#provinceSelect').change(function() {
        var provinceName = $(this).val();

        // Jika ada provinsi yang dipilih
        if (provinceName && provinceLayers[provinceName]) {
            var layer = provinceLayers[provinceName];
            highlightProvince(layer);
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
        { name: "Fajar Kurniawan", location: [ -0.026330, 109.342503 ], job: "Kepala IT di Pontianak" }
    ];

    let alumniTable = document.getElementById('alumniTable');
    if (alumniTable) {
        // Gunakan alumniTable di sini
        alumniData.forEach(function(alumni, index) {
            var row = alumniTable.insertRow();
            row.insertCell(0).innerText = alumni.name;
            row.insertCell(1).innerText = alumni.location.join(", ");
            row.insertCell(2).innerText = alumni.job;
            var actionCell = row.insertCell(3);
            var button = document.createElement("button");
            button.classList.add("btn-show");
            button.innerText = "Tampilkan di Peta";
            button.onclick = function() {
                showAlumniOnMap(alumni, index);
            };
            actionCell.appendChild(button);
        });
    } else {
        console.error('Element dengan id "alumniTable" tidak ditemukan');
    }

    // Fungsi untuk menampilkan alumni di peta
    function showAlumniOnMap(alumni, index) {
        map.setView(alumni.location, 10); // Zoom ke lokasi alumni
        if (alumniMarkers[index]) {
            alumniMarkers[index].addTo(map).openPopup(); // Menambahkan marker dan membuka popup
        }
    }

    // Menambahkan marker untuk setiap alumni di peta
    alumniData.forEach(function(alumni) {
        var marker = L.marker(alumni.location).addTo(map);
        marker.bindPopup("<b>" + alumni.name + "</b><br>Pekerjaan: " + alumni.job);
    });
});
