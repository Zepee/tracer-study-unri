<style>
    .profile-container {
        max-width: 700px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .photo-upload {
        width: 200px;
        height: 300px;
        background-color: #e0e0e0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        color: #777;
        text-align: center;
        border-radius: 5px;
        overflow: hidden;
        cursor: pointer;
        position: relative;
    }

    .photo-upload img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
    }

    .hidden-input {
        display: none;
    }

    .container {
        max-width: 800px;
    }

    .form-label {
        font-weight: bold;
        color: #000;
    }

    .form-control {
        border: 1.5px solid #000;
        border-radius: 8px;
        box-shadow: none;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #000;
    }

    .btn-save {
        background-color: #28a745 !important; /* Hijau */
        color: #fff !important;
        font-weight: bold;
        border-radius: 8px;
        padding: 8px 20px;
        border: none !important;
        transition: background-color 0.2s ease;
    }

    .btn-save:hover {
        background-color: #218838 !important;
    }

    .btn-cancel {
        background-color: #fff !important;
        color: #000 !important;
        font-weight: bold;
        border-radius: 8px;
        padding: 8px 20px;
        border: 1.5px solid #000 !important;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .btn-cancel:hover {
        background-color: #000 !important;
        color: #fff !important;
    }

</style>

<x-layout>
    <x-slot name="header">
        Profil
    </x-slot>

    <div class="container card p-4">
        <ul class="breadcrumb col-lg-12">
            <li>
                <a href="{{ route('alumni.profil') }}" class="breadcrumb-item active fw-bold text-success px-1">
                    Profil
                </a>
            </li>
            <span class="px-2">|</span>
            <li>
                <a href="{{ route('alumni') }}" class="px-1">
                    Data Alumni
                </a>
            </li>
            <span class="px-2">|</span>
            <li>
                <a href="{{ route('alumni.peta') }}" class="px-1">
                    Peta Alumni
                </a>
            </li>
        </ul>

        <h2 class="text-center mb-4">Profil Pribadi</h2>
        <div class="row">
            <div class="col-md-3 d-flex flex-column align-items-center mb-4">
                <div class="photo-upload mb-3" 
                    onclick="document.getElementById('photoInput').click()"
                    ondragover="handleDragOver(event)" 
                    ondrop="handleDrop(event)">
                    <img id="photoPreview" alt="Foto Profil" style="display: none;"/>
                    <span id="uploadText">Upload foto disini</span>
                    <input type="file" id="photoInput" class="hidden-input" accept="image/*" onchange="previewPhoto(event)">
                </div>
            </div>
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" placeholder="Nomor Telepon">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat Lengkap">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tentang</label>
                        <textarea class="form-control" rows="4" placeholder="Ceritakan sedikit tentang dirimu"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Keahlian</label>
                        <input type="text" class="form-control" placeholder="Keahlian yang dimiliki">
                    </div>
                    <div class="form-group mt-4">
                        <h4 class="form-label">Sosial Media</h4>
                    </div>
                    <div class="form-group">
                        <label class="form-label">LinkedIn</label>
                        <input type="url" class="form-control" placeholder="Username LinkedIn">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Instagram</label>
                        <input type="url" class="form-control" placeholder="Username Instagram">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Facebook</label>
                        <input type="url" class="form-control" placeholder="Username Facebook">
                    </div>
                    <div class="form-group">
                        <label class="form-label">X</label>
                        <input type="url" class="form-control" placeholder="Username X)">
                    </div>

                    <!-- Pendidikan -->
                    <div class="form-group mt-4">
                    <h4 class="form-label">Pendidikan</h4>
                    </div>
                    <div id="educationContainer">
                        <div class="education-form">
                            <div class="form-group">
                                <label class="form-label">Nama Sekolah (Universitas)</label>
                                <input type="text" class="form-control" placeholder="Nama Sekolah">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Lokasi Sekolah</label>
                                <input type="text" class="form-control" placeholder="Lokasi Sekolah">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Tanggal Mulai</label>
                                    <select class="form-control" id="startMonth">
                                        <option value="">Bulan</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">&nbsp;</label>
                                    <select class="form-control" id="startYear">
                                        <option value="">Tahun</option>
                                        <!-- Generate years dynamically -->
                                        <script>
                                            for (let i = new Date().getFullYear(); i >= 1980; i--) {
                                                document.write(`<option value="${i}">${i}</option>`);
                                            }
                                        </script>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Tanggal Selesai</label>
                                    <select class="form-control" id="endMonth">
                                        <option value="">Bulan</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">&nbsp;</label>
                                    <select class="form-control" id="endYear">
                                        <option value="">Tahun</option>
                                        <!-- Generate years dynamically -->
                                        <script>
                                            for (let i = new Date().getFullYear(); i >= 1980; i--) {
                                                document.write(`<option value="${i}">${i}</option>`);
                                            }
                                        </script>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tingkat Pendidikan</label>
                                <input type="text" class="form-control" placeholder="Tingkat Pendidikan">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" placeholder="Deskripsi Pendidikan">
                            </div>
                            <div class="form-group">
                                <label class="form-label">IPK</label>
                                <input type="text" class="form-control" placeholder="IPK">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Portofolio Kerja dan Pencapaian</label>
                                <textarea class="form-control" id="portfolio" rows="3" placeholder="Tekan Enter untuk menambah poin"></textarea>
                                <ul id="portfolioList" style="list-style-type: disc; padding-left: 20px;"></ul>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-primary" onclick="addEducationForm()" style="width: 100% !important;">+ Tambah Pendidikan</button>

                    <!-- Pengalaman Kerja -->
                    <div class="form-group mt-4">
                        <h4 class="form-label">Pengalaman</h4>
                    </div>
                    <div id="experienceContainer">
                        <!-- Form Pengalaman -->
                        <div class="experience-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" placeholder="Nama Perusahaan">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Lokasi Perusahaan</label>
                                <input type="text" class="form-control" placeholder="Lokasi Perusahaan">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Deskripsi Perusahaan</label>
                                <textarea class="form-control" rows="3" placeholder="Deskripsi Perusahaan"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="form-label">Tanggal Mulai</label>
                                    <select class="form-control">
                                        <option value="">Bulan</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">&nbsp;</label>
                                    <select class="form-control">
                                        <option value="">Tahun</option>
                                        <script>
                                            for (let i = new Date().getFullYear(); i >= 1980; i--) {
                                                document.write(`<option value="${i}">${i}</option>`);
                                            }
                                        </script>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">Tanggal Selesai</label>
                                    <select class="form-control end-month">
                                        <option value="">Bulan</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-label">&nbsp;</label>
                                    <select class="form-control end-year">
                                        <option value="">Tahun</option>
                                        <script>
                                            for (let i = new Date().getFullYear(); i >= 1980; i--) {
                                                document.write(`<option value="${i}">${i}</option>`);
                                            }
                                        </script>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="currentJob" class="current-job-checkbox" onchange="toggleEndDate(this)">
                                <label for="currentJob">Sedang bekerja di sini</label>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Portofolio Kerja dan Pencapaian</label>
                                <textarea class="form-control portfolio-input" rows="3" placeholder="Tekan Enter untuk menambah poin"></textarea>
                                <ul class="portfolio-list" style="list-style-type: disc; padding-left: 20px;"></ul>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-primary" onclick="addExperienceForm()" style="width: 100% !important;">+ Tambah Pengalaman</button>

                    <div class="form-group d-flex justify-content-start mt-4">
                        <button type="button" class="btn btn-save me-3" onclick="saveProfile()" style="width: 100% !important;">Simpan</button>
                        <button type="button" class="btn btn-cancel" onclick="cancelEdit()" style="width: 50% !important;">Batalkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

<script>
    function previewPhoto(event) {
        const photoPreview = document.getElementById('photoPreview');
        const uploadText = document.getElementById('uploadText');
        
        // Mendapatkan file dari event (baik dari file input maupun drag-and-drop)
        const file = event.target.files ? event.target.files[0] : event.dataTransfer.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                photoPreview.src = e.target.result;
                photoPreview.style.display = 'block';
                uploadText.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    }

    function handleDragOver(event) {
        event.preventDefault(); // Mengizinkan file untuk di-drop
        event.dataTransfer.dropEffect = 'copy'; // Tampilan efek saat drag
    }

    function handleDrop(event) {
        event.preventDefault();
        previewPhoto(event); // Memanggil fungsi previewPhoto dengan file yang di-drop
    }   

    // Fungsi untuk menambahkan form Pendidikan baru
    function addEducationForm() {
        const educationContainer = document.getElementById('educationContainer');
        const newForm = document.querySelector('.education-form').cloneNode(true);
        newForm.querySelectorAll('input, select, textarea').forEach(input => input.value = '');
        newForm.querySelector('#portfolioList').innerHTML = '';
        educationContainer.appendChild(newForm);
    }

   // Fungsi untuk men-setup event listener pada textarea Portofolio
   function setupPortfolioInput(portfolioInput, portfolioList) {
        portfolioInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const text = portfolioInput.value.trim();
                if (text) {
                    const li = document.createElement('li');
                    li.textContent = text;
                    portfolioList.appendChild(li);
                    portfolioInput.value = '';
                }
            }
        });
    }

    // Panggil setupPortfolioInput untuk form pendidikan pertama
    document.querySelectorAll('.education-form').forEach(form => {
        setupPortfolioInput(form.querySelector('.portfolio-input'), form.querySelector('.portfolio-list'));
    });

    // Fungsi untuk menambahkan form Pengalaman baru
    function addExperienceForm() {
        const experienceContainer = document.getElementById('experienceContainer');
        const newForm = document.querySelector('.experience-form').cloneNode(true);

        // Reset semua input di form baru
        newForm.querySelectorAll('input, select, textarea').forEach(input => input.value = '');
        newForm.querySelector('.portfolio-list').innerHTML = '';
        newForm.querySelector('.current-job-checkbox').checked = false;
        
        // Setup event listener untuk portofolio dan checkbox pada form baru
        setupPortfolioInput(newForm.querySelector('.portfolio-input'), newForm.querySelector('.portfolio-list'));
        newForm.querySelector('.current-job-checkbox').onchange = function() {
            toggleEndDate(this);
        };

        experienceContainer.appendChild(newForm);
    }

    // Fungsi untuk menonaktifkan tanggal selesai jika "Sedang bekerja di sini" dicentang
    function toggleEndDate(checkbox) {
        const endDateFields = checkbox.closest('.experience-form').querySelectorAll('.end-month, .end-year');
        endDateFields.forEach(field => field.disabled = checkbox.checked);
    }

    // Fungsi untuk men-setup event listener pada textarea Portofolio
    function setupPortfolioInput(portfolioInput, portfolioList) {
        portfolioInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const text = portfolioInput.value.trim();
                if (text) {
                    const li = document.createElement('li');
                    li.textContent = text;
                    portfolioList.appendChild(li);
                    portfolioInput.value = '';
                }
            }
        });
    }

    // Panggil setupPortfolioInput untuk form pengalaman pertama
    document.querySelectorAll('.experience-form').forEach(form => {
        setupPortfolioInput(form.querySelector('.portfolio-input'), form.querySelector('.portfolio-list'));
    });
</script>
