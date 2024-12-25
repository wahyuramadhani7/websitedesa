<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan Desa Blumbangrejo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar {
            background-color: #2E8B57 !important; 
            padding: 15px 0;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
        }
        
        .navbar-brand img {
            width: 50px;
            margin-right: 15px;
        }
        
        .navbar-nav .nav-link {
            color: white !important;
            padding: 10px 20px;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #2E8B57;
            text-align: center;
            padding-top: 40px;
        }

        .service-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            font-size: 2.5rem;
            color: #2E8B57;
            margin-bottom: 20px;
        }

        .service-title {
            color: #2E8B57;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .service-desc {
            color: #333;
        }
        
        .visitor-count {
            position: fixed;
            left: 20px;
            bottom: 20px;
            background: #2E8B57;
            padding: 15px 25px;
            border-radius: 5px;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .complaint-button {
            position: fixed;
            right: 20px;
            bottom: 20px;
            background: #FF8C00;
            padding: 15px 25px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .complaint-button:hover {
            background: #FFA500;
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div>
                    <h5 class="mb-0">Desa Blumbangrejo</h5>
                    <small>Kecamatan Kunduran</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('beranda') }}">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('infografis') }}">Infografis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pelayanan') }}">Pelayanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dana') }}">APBDes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">UMKM Desa</a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>

    <!-- Layanan Section -->
    <div class="container">
        <h2 class="section-title">PELAYANAN PROFESIONAL DESA BLUMBANGREJO</h2>
        <p class="text-center mb-5">Tim kami yang berpengalaman siap melayani berbagai kebutuhan anda dengan cara yang cepat, efisien, dan sesuai prosedur.</p>
        <div class="row mt-5">
            <!-- Pelayanan Administrasi Kependudukan -->
            <div class="col-md-4">
                <div class="card service-card p-4">
                    <div class="text-center">
                        <i class="fas fa-id-card service-icon"></i>
                        <h4 class="service-title">Administrasi Kependudukan</h4>
                        <p class="service-desc">Pengurusan berbagai dokumen kependudukan seperti KTP, KK, akta kelahiran, surat pindah, dll dengan proses yang mudah dan cepat.</p>
                    </div>
                </div>
            </div>

            <!-- Pelayanan Perizinan -->
            <div class="col-md-4">
                <div class="card service-card p-4">
                    <div class="text-center">
                        <i class="fas fa-file-contract service-icon"></i>
                        <h4 class="service-title">Perizinan</h4>
                        <p class="service-desc">Pengurusan berbagai jenis izin seperti izin usaha, IMB, izin keramaian, dll dengan sistem pelayanan satu pintu yang transparan.</p>
                    </div>
                </div>
            </div>

            <!-- Pelayanan Kesejahteraan Sosial -->
            <div class="col-md-4">
                <div class="card service-card p-4">
                    <div class="text-center">
                        <i class="fas fa-hand-holding-heart service-icon"></i>
                        <h4 class="service-title">Kesejahteraan Sosial</h4>
                        <p class="service-desc">Pelayanan dan fasilitasi program-program bantuan sosial, kesehatan, pendidikan, dan pemberdayaan masyarakat.</p>
                    </div>
                </div>
            </div>

            <!-- Pelayanan Pertanahan -->
            <div class="col-md-4">
                <div class="card service-card p-4">
                    <div class="text-center">
                        <i class="fas fa-map service-icon"></i>
                        <h4 class="service-title">Pertanahan</h4>
                        <p class="service-desc">Pengurusan administrasi pertanahan seperti sertifikasi tanah, jual beli, roya, dll sesuai aturan yang berlaku.</p>
                    </div>
                </div>
            </div>

            <!-- Pelayanan Pembangunan Desa -->  
            <div class="col-md-4">
                <div class="card service-card p-4">
                    <div class="text-center">
                        <i class="fas fa-hard-hat service-icon"></i>  
                        <h4 class="service-title">Pembangunan Desa</h4>
                        <p class="service-desc">Perencanaan, pelaksanaan, dan pengawasan pembangunan infrastruktur dan fasilitas umum desa secara partisipatif.</p>
                    </div>
                </div>
            </div>

            <!-- Pelayanan Keamanan dan Ketertiban -->
            <div class="col-md-4"> 
                <div class="card service-card p-4">
                    <div class="text-center">
                        <i class="fas fa-shield-alt service-icon"></i>
                        <h4 class="service-title">Keamanan dan Ketertiban</h4>  
                        <p class="service-desc">Penyelenggaraan keamanan, ketertiban, perlindungan masyarakat, serta penanganan bencana dan konflik sosial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Visitor Counter -->
    <div class="visitor-count">
        <i class="fas fa-users me-2"></i>
        Pengunjung Hari Ini  
        <br>
        <strong>847</strong>
    </div>

    <!-- Complaint Button --> 
    <a href="#" class="complaint-button">
        <i class="fas fa-comment-alt me-2"></i>
        Layanan Pengaduan
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>