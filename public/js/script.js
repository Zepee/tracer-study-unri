const alumniData = [
    {
        name: "Rizki Santoso",
        company: "PT ABC",
        location: [ -6.914744, 107.609810 ],
        job: "Software Engineer",
        job_status: "Bekerja",
        province: "Jawa Barat",
        city: "Kota Bandung",
        graduationYear: 2020,
        email: "rizki.santoso@abc.com",
        no_hp: "081234567890",
        salary: 1000000,
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
        name: "Andi Wiratama",
        company: "-",
        location: [-7.250445, 112.768845], // Surabaya
        job: "-",
        job_status: "Tidak Bekerja",
        province: "Jawa Timur",
        city: "Kota Surabaya",
        graduationYear: 2018,
        email: "andi.wiratama@xyz.com",
        no_hp: "082134567890",
        salary: 8500000,
        linkedin: "https://www.linkedin.com/in/andi-wiratama",
        photoUrl: "/images/andi.jpg",
        tentangSaya: "Saya adalah seorang Data Analyst dengan minat besar dalam analisis data dan pemodelan statistik untuk keputusan bisnis.",
        keahlian: ["Python", "SQL", "Machine Learning", "Data Visualization", "Excel"],
        pendidikan: "Universitas Gadjah Mada, Statistika (2014 - 2018)",
        pengalaman: [
            {
                title: "Data Analyst",
                company: "PT XYZ",
                period: "Maret 2019 - Sekarang",
                description: "Melakukan analisis data untuk menemukan tren dan pola dalam data bisnis serta menghasilkan laporan berkala."
            },
            {
                title: "Data Intern",
                company: "Bank Negara",
                period: "Agustus 2018 - Februari 2019",
                description: "Menganalisis data kredit nasabah dan membantu dalam pengembangan model risiko kredit."
            }
        ]
    },
    {
        name: "Siti Nurbaya",
        company: "PT Perkasa",
        location: [-6.208763, 106.845599], // Jakarta
        job: "Project Manager",
        job_status: "Bekerja",
        province: "DKI Jakarta",
        city: "Kota Jakarta",
        graduationYear: 2015,
        email: "siti.nurbaya@perkasa.com",
        no_hp: "081234567892",
        salary: 2000000,
        linkedin: "https://www.linkedin.com/in/siti-nurbaya",
        photoUrl: "/images/siti.jpg",
        tentangSaya: "Project Manager dengan pengalaman luas dalam manajemen proyek konstruksi serta keahlian dalam mengelola tim dan waktu.",
        keahlian: ["Project Management", "Leadership", "Time Management", "Budgeting", "Microsoft Project"],
        pendidikan: "Institut Teknologi Bandung, Teknik Sipil (2011 - 2015)",
        pengalaman: [
            {
                title: "Project Manager",
                company: "PT Perkasa",
                period: "Mei 2016 - Sekarang",
                description: "Mengelola proyek konstruksi skala besar dengan fokus pada kualitas dan efisiensi waktu."
            },
            {
                title: "Assistant Project Manager",
                company: "PT Jaya Konstruksi",
                period: "September 2015 - April 2016",
                description: "Membantu dalam pengawasan proyek dan pelaporan perkembangan harian kepada manajemen."
            }
        ]
    },
    {
        name: "Budi Santoso",
        company: "PT Sejahtera",
        location: [-0.789275, 113.921327], // Pontianak, Kalimantan
        job: "Backend Developer",
        job_status: "Bekerja",
        province: "Kalimantan Barat",
        city: "Pontianak",
        graduationYear: 2019,
        email: "budi.santoso@sejahtera.com",
        no_hp: "083234567893",
        salary: 3000000,
        linkedin: "https://www.linkedin.com/in/budi-santoso",
        photoUrl: "/images/budi.jpg",
        tentangSaya: "Backend Developer yang ahli dalam pengembangan sistem berbasis microservices dan pengelolaan server.",
        keahlian: ["Node.js", "Express.js", "MongoDB", "API Development", "Docker"],
        pendidikan: "Universitas Brawijaya, Teknik Informatika (2015 - 2019)",
        pengalaman: [
            {
                title: "Backend Developer",
                company: "PT Sejahtera",
                period: "Juli 2019 - Sekarang",
                description: "Bertanggung jawab atas pengembangan backend aplikasi web dengan Node.js dan optimasi API."
            },
            {
                title: "IT Support Intern",
                company: "PT Telekomunikasi",
                period: "Maret 2018 - Juni 2019",
                description: "Membantu dalam dukungan teknis dan pengembangan tools internal untuk tim support."
            }
        ]
    },
    {
        name: "Indah Permata",
        company: "PT Digital Nusantara",
        location: [-7.797068, 110.370529], // Yogyakarta
        job: "UI/UX Designer",
        job_status: "Bekerja",
        province: "Yogyakarta",
        city: "Kota Yogyakarta",
        graduationYear: 2017,
        email: "indah.permata@digitalnusantara.com",
        no_hp: "085123456789",
        salary: 8000000,
        linkedin: "https://www.linkedin.com/in/indah-permata",
        photoUrl: "/images/indah.jpg",
        tentangSaya: "UI/UX Designer dengan pengalaman dalam merancang antarmuka pengguna yang intuitif dan berpusat pada pengguna.",
        keahlian: ["Adobe XD", "Figma", "User Research", "Wireframing", "Prototyping"],
        pendidikan: "Universitas Diponegoro, Desain Komunikasi Visual (2013 - 2017)",
        pengalaman: [
            {
                title: "UI/UX Designer",
                company: "PT Digital Nusantara",
                period: "Februari 2018 - Sekarang",
                description: "Merancang antarmuka pengguna untuk aplikasi mobile dan website perusahaan dengan pendekatan user-centered design."
            },
            {
                title: "Graphic Designer Intern",
                company: "PT Kreasi Cipta",
                period: "Agustus 2017 - Januari 2018",
                description: "Mengembangkan desain grafis untuk kebutuhan branding perusahaan dan desain promosi."
            }
        ]
    },
    {
        name: "Ahmad Fauzi",
        company: "PT Sinar Jaya",
        location: [1.48218, 124.83949], // Manado
        job: "Full Stack Developer",
        job_status: "Bekerja",
        province: "Sulawesi Utara",
        city: "Kota Manado",
        graduationYear: 2016,
        email: "ahmad.fauzi@sinarjaya.com",
        no_hp: "087123456789",
        // salary: 12000000,
        linkedin: "https://www.linkedin.com/in/ahmad-fauzi",
        photoUrl: "/images/ahmad.jpg",
        tentangSaya: "Full Stack Developer dengan kemampuan dalam pengembangan frontend dan backend, serta pengelolaan database.",
        keahlian: ["JavaScript", "Vue.js", "Laravel", "MySQL", "REST API"],
        pendidikan: "Universitas Hasanuddin, Teknik Informatika (2012 - 2016)",
        pengalaman: [
            {
                title: "Full Stack Developer",
                company: "PT Sinar Jaya",
                period: "April 2017 - Sekarang",
                description: "Bertanggung jawab atas pengembangan dan pemeliharaan aplikasi web perusahaan dengan teknologi Vue.js dan Laravel."
            },
            {
                title: "Backend Developer Intern",
                company: "PT Makmur Bersama",
                period: "September 2016 - Maret 2017",
                description: "Membangun dan mengoptimalkan backend aplikasi web internal menggunakan Laravel."
            }
        ]
    },
    {
        name: "Dewi Lestari",
        company: "PT XYZ",
        location: [ -7.250445, 112.768845 ],
        job: "Data Analyst",
        job_status: "Bekerja",
        province: "Jawa Timur",
        city: "Surabaya",
        graduationYear: 2018,
        email: "dewi.lestari@xyz.com",
        no_hp: "082134567891",
        salary: 9000000,
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
        job_status: "Bekerja",
        province: "Sumatera Utara",
        city: "Medan",
        graduationYear: 2019,
        email: "ahmad.wijaya@def.com",
        no_hp: "083134567892",
        salary: 3000000,   
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
        job_status: "Bekerja",
        province: "Jawa Tengah",
        city: "Semarang",
        graduationYear: 2022,
        email: "budi.setiawan@jkl.com",
        no_hp: "085134567894",
        salary: 4000000,
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
        job_status: "Bekerja",
        province: "Sulawesi Selatan",
        city: "Makassar",
        graduationYear: 2021,
        email: "siti.nurhaliza@ghi.com",
        no_hp: "084134567893",
        salary: 7000000,
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
        job_status: "Bekerja",
        province: "Bali",
        city: "Denpasar",
        graduationYear: 2020,
        email: "fitri.hidayat@mno.com",
        no_hp: "086134567895",
        salary: 1000000,
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
        job_status: "Bekerja",
        province: "Kalimantan Selatan",
        city: "Banjarmasin",
        graduationYear: 2019,
        email: "taufik.ramadhan@opq.com",
        no_hp: "087123456789",
        salary: 1200000,
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
        job_status: "Bekerja",
        province: "Yogyakarta",
        city: "Yogyakarta",
        graduationYear: 2021,
        email: "linda.dewi@rst.com",
        no_hp: "088134567896",
        salary: 5000000,
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
    },
    {
        name: "Andi Kurniawan",
        company: "PT Digital Nusantara",
        location: [ -6.208763, 106.845599 ],
        job: "Backend Developer",
        job_status: "Bekerja",
        province: "Jakarta",
        city: "Jakarta",
        graduationYear: 2017,
        email: "andi.kurniawan@digitalnusantara.com",
        no_hp: "081234567891",
        salary: 9000000,
        linkedin: "https://www.linkedin.com/in/andi-kurniawan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Backend Developer dengan spesialisasi dalam pengembangan sistem berbasis cloud. Berpengalaman dengan Node.js dan database NoSQL.",
        keahlian: ["Node.js", "Express", "MongoDB", "AWS", "Microservices"],
        pendidikan: "Universitas Indonesia, Ilmu Komputer (2013 - 2017)",
        pengalaman: [
            {
                title: "Backend Developer",
                company: "PT Digital Nusantara",
                period: "Februari 2018 - Sekarang",
                description: "Membangun dan mengoptimalkan API untuk mendukung aplikasi skala besar."
            }
        ]
    },
    {
        name: "Rina Setyawati",
        company: "PT Kreatif Media",
        location: [ -6.90389, 107.61861 ],
        job: "UI/UX Designer",
        job_status: "Bekerja",
        province: "Jawa Barat",
        city: "Kota Bandung",
        graduationYear: 2016,
        email: "rina.setyawati@kreatifmedia.com",
        no_hp: "081245678912",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/rina-setyawati",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "UI/UX Designer dengan fokus pada pengalaman pengguna dan desain antarmuka yang intuitif.",
        keahlian: ["Figma", "Sketch", "Adobe XD", "User Research", "Wireframing"],
        pendidikan: "Institut Teknologi Bandung, Desain Komunikasi Visual (2012 - 2016)",
        pengalaman: [
            {
                title: "UI/UX Designer",
                company: "PT Kreatif Media",
                period: "Januari 2017 - Sekarang",
                description: "Merancang pengalaman pengguna dan antarmuka aplikasi yang ramah pengguna."
            }
        ]
    },
    {
        name: "Agus Salim",
        company: "PT Teknologi Hijau",
        location: [ -7.983908, 112.621391 ],
        job: "Network Administrator",
        job_status: "Bekerja",
        province: "Jawa Timur",
        city: "Malang",
        graduationYear: 2015,
        email: "agus.salim@teknologihijau.com",
        no_hp: "081256789123",
        salary: 10000000,
        linkedin: "https://www.linkedin.com/in/agus-salim",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Network Administrator yang berpengalaman dalam pengaturan jaringan dan keamanan sistem.",
        keahlian: ["Network Security", "Cisco", "Firewall Configuration", "VPN", "Troubleshooting"],
        pendidikan: "Universitas Brawijaya, Teknik Informatika (2011 - 2015)",
        pengalaman: [
            {
                title: "Network Administrator",
                company: "PT Teknologi Hijau",
                period: "April 2016 - Sekarang",
                description: "Mengelola infrastruktur jaringan dan memastikan keamanan sistem perusahaan."
            }
        ]
    },
    {
        name: "Lina Hartanto",
        company: "PT E-Commerce Indonesia",
        location: [ -6.914744, 107.609810 ],
        job: "Digital Marketing Specialist",
        job_status: "Bekerja",
        province: "Jawa Barat",
        city: "Kota Bandung",
        graduationYear: 2018,
        email: "lina.hartanto@ecommerce.id",
        no_hp: "081267891234",
        salary: 2000000,
        linkedin: "https://www.linkedin.com/in/lina-hartanto",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Digital Marketing Specialist yang berfokus pada kampanye pemasaran online dan optimasi media sosial.",
        keahlian: ["SEO", "Content Marketing", "Social Media Marketing", "Google Analytics", "PPC"],
        pendidikan: "Universitas Padjadjaran, Ilmu Komunikasi (2014 - 2018)",
        pengalaman: [
            {
                title: "Digital Marketing Specialist",
                company: "PT E-Commerce Indonesia",
                period: "Juli 2018 - Sekarang",
                description: "Mengelola strategi pemasaran digital dan kampanye iklan online."
            }
        ]
    },
    {
        name: "Ahmad Fauzan",
        company: "PT Industri Kreatif",
        location: [ -7.257472, 112.752088 ],
        job: "Full Stack Developer",
        job_status: "Bekerja",
        province: "Jawa Timur",
        city: "Surabaya",
        graduationYear: 2020,
        email: "ahmad.fauzan@industrikreatif.com",
        no_hp: "081278912345",
        salary: 2000000,
        linkedin: "https://www.linkedin.com/in/ahmad-fauzan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Full Stack Developer dengan pengalaman dalam pengembangan aplikasi web front-end dan back-end.",
        keahlian: ["JavaScript", "React", "Node.js", "MySQL", "API Integration"],
        pendidikan: "Institut Teknologi Sepuluh Nopember, Sistem Informasi (2016 - 2020)",
        pengalaman: [
            {
                title: "Full Stack Developer",
                company: "PT Industri Kreatif",
                period: "Maret 2020 - Sekarang",
                description: "Mengembangkan aplikasi web dengan teknologi modern dan memastikan performa yang optimal."
            }
        ]
    },
    {
        name: "Siti Aminah",
        company: "PT Bank Sejahtera",
        location: [ -7.797068, 110.370529 ],
        job: "Data Scientist",
        job_status: "Bekerja",
        province: "DI Yogyakarta",
        city: "Yogyakarta",
        graduationYear: 2019,
        email: "siti.aminah@banksejahtera.com",
        no_hp: "081289123456",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/siti-aminah",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Data Scientist yang memiliki keahlian dalam analisis data dan pembuatan model prediktif untuk keperluan bisnis.",
        keahlian: ["Python", "Machine Learning", "Data Visualization", "SQL", "Statistics"],
        pendidikan: "Universitas Gadjah Mada, Matematika (2015 - 2019)",
        pengalaman: [
            {
                title: "Data Scientist",
                company: "PT Bank Sejahtera",
                period: "Juli 2019 - Sekarang",
                description: "Menganalisis data nasabah untuk memberikan insight bisnis dan membuat model prediksi."
            }
        ]
    },
    {
        name: "Rafi Setiawan",
        company: "PT Solusi Teknologi",
        location: [ -6.914744, 107.609810 ],
        job: "Mobile Developer",
        job_status: "Bekerja",
        province: "Jawa Barat",
        city: "Kota Bandung",
        graduationYear: 2021,
        email: "rafi.setiawan@solusiteknologi.com",
        no_hp: "081290123456",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/rafi-setiawan",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Mobile Developer yang berfokus pada pengembangan aplikasi Android dan iOS dengan pengalaman menggunakan Flutter dan Kotlin.",
        keahlian: ["Flutter", "Kotlin", "Android Development", "iOS Development", "UI/UX"],
        pendidikan: "Telkom University, Teknik Informatika (2017 - 2021)",
        pengalaman: [
            {
                title: "Mobile Developer",
                company: "PT Solusi Teknologi",
                period: "September 2021 - Sekarang",
                description: "Membangun aplikasi mobile untuk berbagai sektor bisnis."
            }
        ]
    },
    {
        name: "Desi Marlina",
        company: "PT Karya Indah",
        location: [ -6.208763, 106.845599 ],
        job: "Human Resources Manager",
        province: "Jakarta",
        job_status: "Bekerja",
        city: "Jakarta",
        graduationYear: 2016,
        email: "desi.marlina@karyaindah.com",
        no_hp: "081231234567",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/desi-marlina",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Human Resources Manager dengan pengalaman dalam rekrutmen, pelatihan, dan pengembangan sumber daya manusia.",
        keahlian: ["Recruitment", "Employee Training", "Employee Relations", "HR Strategy", "Leadership"],
        pendidikan: "Universitas Negeri Jakarta, Manajemen SDM (2012 - 2016)",
        pengalaman: [
            {
                title: "Human Resources Manager",
                company: "PT Karya Indah",
                period: "Agustus 2016 - Sekarang",
                description: "Mengelola SDM perusahaan dan mengembangkan program pelatihan karyawan."
            }
        ]
    },
    {
        name: "Yoga Pratama",
        company: "PT Mekar Jaya",
        location: [ -6.17511, 106.865036 ],
        job: "System Analyst",
        job_status: "Bekerja",
        province: "Jakarta",
        city: "Jakarta",
        graduationYear: 2018,
        email: "yoga.pratama@mekarjaya.com",
        no_hp: "081299876543",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/yoga-pratama",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "System Analyst berpengalaman yang bertanggung jawab dalam analisis dan perancangan sistem perusahaan.",
        keahlian: ["System Analysis", "Project Management", "SQL", "Requirements Gathering", "Software Testing"],
        pendidikan: "Universitas Bina Nusantara, Teknik Informatika (2014 - 2018)",
        pengalaman: [
            {
                title: "System Analyst",
                company: "PT Mekar Jaya",
                period: "Mei 2018 - Sekarang",
                description: "Mengidentifikasi kebutuhan bisnis dan merancang solusi sistem yang sesuai."
            }
        ]
    },
    {
        name: "Sari Amalia",
        company: "PT Unggul Utama",
        location: [ -7.797068, 110.370529 ],
        job: "Content Writer",
        job_status: "Bekerja",
        province: "DI Yogyakarta",
        city: "Yogyakarta",
        graduationYear: 2020,
        email: "sari.amalia@unggulutama.com",
        no_hp: "081212345678",
        salary: 12000000,
        linkedin: "https://www.linkedin.com/in/sari-amalia",
        photoUrl: "/images/speed.jpg",
        tentangSaya: "Content Writer yang berpengalaman dalam penulisan konten kreatif dan artikel SEO untuk berbagai klien.",
        keahlian: ["Content Writing", "SEO", "Copywriting", "Creative Writing", "Social Media"],
        pendidikan: "Universitas Gadjah Mada, Sastra Inggris (2016 - 2020)",
        pengalaman: [
            {
                title: "Content Writer",
                company: "PT Unggul Utama",
                period: "Agustus 2020 - Sekarang",
                description: "Membuat konten kreatif dan artikel yang dioptimalkan untuk SEO."
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
        weight: 1
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

        // Urutkan data berdasarkan nama (A-Z) dan tahun lulus (ascending)
        const sortedData = data.sort((a, b) => {
            if (a.name.toLowerCase() < b.name.toLowerCase()) return -1;
            if (a.name.toLowerCase() > b.name.toLowerCase()) return 1;
            // Jika nama sama, urutkan berdasarkan tahun lulus
            return a.graduationYear - b.graduationYear;
        });

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

    // Inisialisasi Select2 untuk semua dropdown
    function initializeSelect2() {
        $('#filterName').select2({
            placeholder: 'Cari Nama Alumni',
            allowClear: true,
            width: '100%'
        }).on('select2:select', function(e) {
            // Cari data alumni berdasarkan nama yang dipilih
            const selectedAlumni = alumniData.find(alumni => alumni.name === e.params.data.id);
            
            if (selectedAlumni) {
                // Zoom ke lokasi alumni
                map.setView(selectedAlumni.location, 13);
                
                // Update provinsi dan kota sesuai dengan data alumni
                $('#provinceSelect').val(selectedAlumni.province).trigger('change');
                
                // Tunggu sebentar untuk memastikan dropdown kota sudah terupdate
                setTimeout(() => {
                    $('#citySelect').val(selectedAlumni.city).trigger('change');
                }, 100);

                $('#companySelect').val(selectedAlumni.company).trigger('change');
                $('#yearSelect').val(selectedAlumni.graduationYear).trigger('change');
                $('#jobSelect').val(selectedAlumni.job).trigger('change');
                $('#jobStatusSelect').val(selectedAlumni.job_status).trigger('change');

                // Highlight provinsi dan kota yang sesuai
                if (provinceLayers[selectedAlumni.province]) {
                    highlightProvince(provinceLayers[selectedAlumni.province]);
                }

                // Tampilkan dan highlight layer kota
                showCityLayer(selectedAlumni.province);
                if (cityLayers[selectedAlumni.province]) {
                    const cityLayer = cityLayers[selectedAlumni.province].find(city => 
                        city.name === selectedAlumni.city
                    );
                    if (cityLayer) {
                        highlightCity(cityLayer.layer);
                    }
                }
            }
        }).on('select2:clear', function(e) {
            // Reset view peta ke tampilan Indonesia
            map.setView([-2.5, 118], 5);
            
            // Reset highlight provinsi dan kota
            if (highlightedProvinceLayer) {
                highlightedProvinceLayer.setStyle(provinceStyle);
                highlightedProvinceLayer = null;
            }
            if (highlightedLayer) {
                highlightedLayer.setStyle(defaultStyle);
                highlightedLayer = null;
            }
            
            // Hapus semua layer kota dari peta
            for (let key in cityLayers) {
                cityLayers[key].forEach(function(cityObj) {
                    map.removeLayer(cityObj.layer);
                });
            }
            
            // Reset dropdown provinsi dan kota
            $('#provinceSelect').val('').trigger('change');
            $('#citySelect').val('').trigger('change');
            $('#citySelect').empty().append('<option value="">Semua</option>');
            $('#citySelect').prop('disabled', true);
            $('#yearSelect').val('').trigger('change');
            $('#jobSelect').val('').trigger('change');
            $('#jobStatusSelect').val('').trigger('change');
            $('#companySelect').val('').trigger('change');
        });

        $('#companySelect').select2({
            placeholder: 'Cari Perusahaan',
            allowClear: true,
            width: '100%'
        });

        $('#provinceSelect').select2({
            placeholder: 'Pilih Provinsi',
            allowClear: true,
            width: '100%'
        }).on('select2:clear', function(e) {
            // Reset highlight provinsi
            if (highlightedProvinceLayer) {
                highlightedProvinceLayer.setStyle(provinceStyle);
                highlightedProvinceLayer = null;
            }
            
            // Reset semua layer kota
            for (let key in cityLayers) {
                cityLayers[key].forEach(function(cityObj) {
                    map.removeLayer(cityObj.layer);
                });
            }
            
            // Reset view peta
            map.setView([-2.5, 118], 5);
            
            // Reset dan disable dropdown kota
            $('#citySelect').empty().append('<option value="">Semua</option>');
            $('#citySelect').prop('disabled', true);
        });
    
        $('#citySelect').select2({
            placeholder: 'Pilih Kota',
            allowClear: true,
            width: '100%'
        }).on('select2:clear', function(e) {
            // Reset highlight kota jika ada
            if (highlightedLayer) {
                highlightedLayer.setStyle(defaultStyle);
                highlightedLayer = null;
            }
            
            // Jika ada provinsi yang dipilih, zoom ke provinsi tersebut
            const selectedProvince = $('#provinceSelect').val();
            if (selectedProvince && provinceLayers[selectedProvince]) {
                map.fitBounds(provinceLayers[selectedProvince].getBounds());
            }
        });

        $('#yearSelect').select2({
            placeholder: 'Semua',
            allowClear: true,
            width: '72%'
        });
        $('#jobStatusSelect').select2({
            placeholder: 'Semua',
            allowClear: true,
            width: '61%'
        });
        $('#jobSelect').select2({
            placeholder: 'Pekerjaan',
            allowClear: true,
            width: '100%'
        });

        // Tambahkan inisialisasi salary slider
        const salarySlider = document.getElementById('salarySlider');

        // Hapus slider yang sudah ada jika ada
        if (salarySlider.noUiSlider) {
            salarySlider.noUiSlider.destroy();
        }
        noUiSlider.create(salarySlider, {
            start: [0, 50000000], // Nilai awal slider
            connect: true,
            step: 100000,
            range: {
                'min': 0,
                'max': 50000000
            },
            format: {
                to: function (value) {
                    return Math.round(value);
                },
                from: function (value) {
                    return Math.round(value);
                }
            }
        });

        // Update nilai input saat slider bergerak
        salarySlider.noUiSlider.on('update', function (values, handle) {
            const formatCurrency = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            });
            
            document.getElementById('minSalary').value = formatCurrency.format(values[0]);
            document.getElementById('maxSalary').value = formatCurrency.format(values[1]);
        });

        // Tambahkan event listener untuk filter langsung
        salarySlider.noUiSlider.on('slide', function() {
            filterAlumni(); // Panggil fungsi filter setiap kali slider bergerak
        });
    }

    // Panggil fungsi ini setelah DOM loaded
    $(document).ready(function() {
        initializeSelect2();
    });

    // Populate dropdown perusahaan dan tahun lulus secara dinamis
    function populateDropdowns() {
        const companySet = new Set();
        const yearSet = new Set();
        const nameSet = new Set();
        const jobStatusSet = new Set();
        const jobSet = new Set();
    
        alumniData.forEach(alumni => {
            companySet.add(alumni.company);
            yearSet.add(alumni.graduationYear);
            nameSet.add(alumni.name);
            jobSet.add(alumni.job);
            jobStatusSet.add(alumni.job_status);
        });
        

        // Urutkan nameSet dan yearSet
        const sortedNames = Array.from(nameSet).sort();
        const sortedYears = Array.from(yearSet).sort();

        // Populate nama dropdown
        const nameSelect = document.querySelector('#filterName');
        nameSelect.innerHTML = '<option value="">Semua</option>';
        sortedNames.forEach(name => {
            nameSelect.innerHTML += `<option value="${name}">${name}</option>`;
        });

        const companySelect = document.querySelector('#companySelect');
        companySelect.innerHTML = '<option value="">Semua</option>';
        companySet.forEach(company => {
            companySelect.innerHTML += `<option value="${company}">${company}</option>`;
        });
    
        const yearSelect = document.querySelector('#yearSelect');
        yearSelect.innerHTML = '<option value="">Semua</option>';
        sortedYears.forEach(year => {
            yearSelect.innerHTML += `<option value="${year}">${year}</option>`;
        });
        const jobStatusSelect = document.querySelector('#jobStatusSelect');
        jobStatusSelect.innerHTML = '<option value="">Semua</option>';
        jobStatusSet.forEach(job_status => {
            jobStatusSelect.innerHTML += `<option value="${job_status}">${job_status}</option>`;
        });
        const jobSelect = document.querySelector('#jobSelect');
        jobSelect.innerHTML = '<option value="">Semua</option>';
        jobSet.forEach(job => {
            jobSelect.innerHTML += `<option value="${job}">${job}</option>`;
        });
    }
    
    populateDropdowns();


    // Pop up filter alumni
    document.getElementById("filterButton").addEventListener("click", function () {
        const filterPopup = document.getElementById("filterPopup");
        if (filterPopup.style.display === "none" ) {
            filterPopup.style.display = "block";
        } else {
            filterPopup.style.display = "none";
        }
    });


    // Fungsi untuk menutup pop-up saat tombol X diklik
    document.getElementById("closeFilterPopup").addEventListener("click", function() {
        document.getElementById("filterPopup").style.display = "none"; // Sembunyikan popup
    }); 

    function resetFilters() {
        // Reset semua input filter
        document.getElementById('filterName').value = '';
        document.getElementById('companySelect').value = '';
        document.getElementById('provinceSelect').value = '';
        document.getElementById('citySelect').value = '';
        document.getElementById('yearSelect').value = '';
        document.getElementById('jobSelect').value = '';
        document.getElementById('jobStatusSelect').value = '';

        $('#jobSelect').val(null).trigger('change');
        $('#jobStatusSelect').val(null).trigger('change'); 
        
        // Reset salary slider
        const salarySlider = document.getElementById('salarySlider');
        if (salarySlider.noUiSlider) {
            salarySlider.noUiSlider.set([0, 50000000]); // Reset ke nilai awal
        }

        // Reset highlight provinsi dan kota yang di-highlight
        if (highlightedProvinceLayer) {
            highlightedProvinceLayer.setStyle(provinceStyle); // Kembalikan ke style default provinsi
            highlightedProvinceLayer = null; // Hapus referensi ke highlight sebelumnya
        }
        if (highlightedLayer) {
            highlightedLayer.setStyle(defaultStyle); // Kembalikan ke style default kota
            highlightedLayer = null; // Hapus referensi ke highlight sebelumnya
        }
    
        // Reset peta kembali ke tampilan awal Indonesia
        map.setView([-2.5, 118], 5);
        
        // Hapus semua layer kota yang aktif di peta
        for (let key in cityLayers) {
            cityLayers[key].forEach(function(cityObj) {
                map.removeLayer(cityObj.layer);
            });
        }
        
        // Reset dropdown kota dan disable dropdown
        $('#citySelect').empty().append('<option value="">Semua</option>');
        $('#citySelect').prop('disabled', true);
        ['#filterName', '#companySelect', '#provinceSelect', '#citySelect', '#yearSelect','jobSelect','jobStatusSelect'].forEach(selector => {
            $(selector).val(null).trigger('change');
        });

    
        // Sembunyikan popup filter
        document.getElementById("filterPopup").style.display = "none";

        // Gunakan let untuk menyimpan data yang difilter
        let filteredAlumniData = alumniData.filter(alumni => alumni.salary !== undefined);

        // Tampilkan semua data di tabel dan peta
        renderTable(filteredAlumniData); // Tampilkan kembali data lengkap di tabel
        updateMap(filteredAlumniData); // Perbarui peta dengan semua data
    }
    
    // Panggil resetFilters() saat tombol "Reset" diklik
    document.getElementById("resetButton").addEventListener("click", resetFilters);

    function applyFilters() {
        // Jalankan fungsi filter alumni disini
        filterAlumni(); 
    
        // Sembunyikan popup setelah filter diterapkan
        document.getElementById("filterPopup").style.display = "none"; 
    }
    
    // Pastikan fungsi applyFilters dipanggil ketika tombol Filter diklik
    document.getElementById("filterButton2").addEventListener("click", applyFilters);

    
    // Function to filter alumni based on user input
    function filterAlumni() {
        const selectedProvince = $('#provinceSelect').val();
        const selectedCity = $('#citySelect').val();
        const selectedName = $('#filterName').val();
        const selectedCompany = $('#companySelect').val();
        const selectedYear = $('#yearSelect').val();
        const selectedJob = $('#jobSelect').val();
        const selectedJobStatus = $('#jobStatusSelect').val();
        const salarySlider = document.getElementById('salarySlider');
        const [minSalary, maxSalary] = salarySlider.noUiSlider.get();

        const filteredData = alumniData.filter(alumni => {
            const matchProvince = !selectedProvince || alumni.province === selectedProvince;
            const matchCity = !selectedCity || alumni.city === selectedCity;
            const matchName = !selectedName || alumni.name === selectedName;
            const matchCompany = !selectedCompany || alumni.company === selectedCompany;
            const matchYear = !selectedYear || alumni.graduationYear.toString() === selectedYear;
            const matchJob = !selectedJob || String(alumni.job).toLowerCase() === String(selectedJob).toLowerCase();
            const matchJobStatus = !selectedJobStatus || String(alumni.job_status) === String(selectedJobStatus);
            const matchSalary = alumni.salary !== undefined &&
                alumni.salary >= parseInt(minSalary) &&
                alumni.salary <= parseInt(maxSalary);

            return matchProvince && matchCity && matchName && matchCompany && 
                   matchYear && matchJob && matchJobStatus && matchSalary;
        });
        
        renderTable(filteredData);
        updateMap(filteredData);
    }

    

    // CUSTON ICON MARKER ALUMNI
    const customIcon = L.icon({
        iconUrl: '/images/marker.png', // Path ke ikon kamu
        iconSize: [45, 45], // Atur ulang ukuran ikon (width, height)
        iconAnchor: [22.5, 45], // Anchor agar ikon terlihat menempel pada lokasi di bagian bawah
        popupAnchor: [0, -45] // Posisi popup muncul di atas ikon
    });

    // Fungsi untuk menambahkan marker dengan ikon kustom
    function addCustomMarker(location, alumni) {
        const marker = L.marker(location, { icon: customIcon });
        marker.bindPopup(`
            <div style="width: 150px; text-align: center;background-color">
                <img src="${alumni.photoUrl}" alt="${alumni.name}" class="img-fluid" 
                    style="width: 100%; height: 150px; object-fit: cover; border-radius: 10px; border: 1px solid #ddd;">
                <h4 style="font-size: 16px; font-weight: bold; margin: 8px 0 4px;">${alumni.name}</h4>
                <p style="font-size: 14px; margin: 0; color: #555;">${alumni.job}</p>
                <p style="font-size: 13px; color: #777; margin: 0;">${alumni.company}</p>
                <p style="font-size: 12px; color: #999; margin: 4px 0;">${alumni.city}, ${alumni.province}</p>
            </div>
        `);
        return marker;
    }

    // Deklarasikan alumniMarkersCluster sebagai variabel global
    let alumniMarkersCluster;

    function createClusterGroup() {
        return L.markerClusterGroup({
            iconCreateFunction: function (cluster) {
                const count = cluster.getChildCount(); // Jumlah marker dalam cluster
        
                return L.divIcon({
                    html: `
                        <div style="position: relative; width: 45px; height: 45px;">
                            <!-- Gambar Ikon -->
                            <img src="/images/cluster-icon.png" style="width: 100%; height: 100%;">
                            <!-- Angka di tengah ikon -->
                            <span style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
                                        display: flex; align-items: center; justify-content: center; 
                                        color: white; font-weight: bold; font-size: 20px; text-shadow: 
                                        -1px -1px 0 #000,  /* Shadow di kiri atas */
                                        1px -1px 0 #000,  /* Shadow di kanan atas */
                                        -1px  1px 0 #000,  /* Shadow di kiri bawah */
                                        1px  1px 0 #000,  /* Shadow di kanan bawah */
                                        2px 2px 10px rgba(0, 0, 0, 1), 2px 2px 10px rgba(0, 0, 0, 1);">
                                ${count}
                            </span>
                        </div>`,
                    className: 'custom-cluster-icon',
                    iconSize: [50, 50] // Ukuran ikon cluster
                });
            }, maxClusterRadius: 20  // Atur radius agar cluster tetap terkumpul
            
        });
    }

    function updateMap(filteredData) {
        // Hapus marker dan heatmap yang ada
        if (window.heat) {
            map.removeLayer(window.heat);
        }
        if (alumniMarkersCluster) {
            map.removeLayer(alumniMarkersCluster);
        }

        // Inisialisasi ulang alumniMarkersCluster setiap kali updateMap dipanggil
        alumniMarkersCluster = createClusterGroup();

        // Update heatmap dan marker hanya untuk data yang terfilter
        const heatData = filteredData.map(alumni => [alumni.location[0], alumni.location[1], 1]);
        
        // Tambahkan heatmap baru
        window.heat = L.heatLayer(heatData, { 
            radius: 15,
            blur: 25,
            maxZoom: 5
        }).addTo(map);
        
        // Tambahkan marker untuk setiap alumni yang terfilter
        filteredData.forEach(function(alumni) {
            const marker = addCustomMarker(alumni.location, alumni); // Memanggil dengan benar
            alumniMarkersCluster.addLayer(marker);
        });
        // Tambahkan marker cluster ke peta
        map.addLayer(alumniMarkersCluster);
    }

    // Inisialisasi data awal
    function initializeData() {
        // Populate dropdowns terlebih dahulu
        populateDropdowns();
        
        // Initialize Select2
        initializeSelect2();
        
        // Set default values for salary slider
        const salarySlider = document.getElementById('salarySlider');
        if (salarySlider.noUiSlider) {
            salarySlider.noUiSlider.set([0, 20000000]);
        }

        // Render tabel dengan semua data
        renderTable(alumniData);
        
        // Inisialisasi marker dan heatmap
        alumniMarkersCluster = createClusterGroup();
        updateMap(alumniData);
    }

    // Panggil initializeData setelah semua komponen siap
    initializeData();

    // Event listeners tetap ada
    $('#filterName').on('input', filterAlumni);
    $('#companySelect').on('change', filterAlumni);
    $('#yearSelect').on('change', filterAlumni);
    $('#provinceSelect').on('change', filterAlumni);
    $('#citySelect').on('change', filterAlumni);
    $('#jobStatusSelect').on('change', filterAlumni);
    $('#jobSelect').on('change', filterAlumni);

    filterAlumni();
});


