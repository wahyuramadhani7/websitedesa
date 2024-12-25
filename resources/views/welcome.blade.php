<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Desa Dalung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero-section {
            background-image: url('/background.jpg');
            background-size: cover;
            background-position: center;
            min-height: 600px;
            position: relative;
            padding-top: 100px;
        }
        
        .hero-overlay {
            background: rgba(0,0,0,0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .menu-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }
        
        .menu-item {
            background: white;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .menu-item:hover {
            transform: translateY(-5px);
        }
        
        .social-links {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
        }
        
        .social-links a {
            display: block;
            margin: 10px 0;
            width: 40px;
            height: 40px;
            background: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: #333;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/logo.png" height="40" alt="Logo Desa">
                PEMERINTAH DESA BLUMBANGREJO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Profile Desa
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Pemerintahan Desa
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Pelayanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">APBDes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">UMKM Desa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <div class="text-center text-white">
                <h1 class="display-4 mb-4">WEBSITE PEMERINTAH DESA BLUMBANGREJO</h1>
                <h3>KEC. KUNDURAN KAB. BLORA</h3>
                <div class="mt-4">
                    <div class="input-group mx-auto" style="max-width: 500px;">
                        <input type="text" class="form-control" placeholder="Cari...">
                        <button class="btn btn-dark" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Icons -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="menu-item">
                        <img src="/icons/map.png" alt="Peta Desa" class="menu-icon">
                        <h6 class="mt-2">PETA DESA</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="menu-item">
                        <img src="/icons/sidumas.png" alt="SIDUMAS" class="menu-icon">
                        <h6 class="mt-2">SIDUMAS</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="menu-item">
                        <img src="/icons/akudicari.png" alt="AKUDICARI" class="menu-icon">
                        <h6 class="mt-2">AKUDICARI</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="menu-item">
                        <img src="/icons/pengumuman.png" alt="Pengumuman" class="menu-icon">
                        <h6 class="mt-2">PENGUMUMAN</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik dan Informasi -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- Informasi Terbaru -->
                <div class="col-lg-8 mb-4">
                    <h4 class="mb-4">Informasi Terbaru</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <img src="/news-thumbnail.jpg" alt="Berita" style="width: 200px; height: 150px; object-fit: cover;">
                                <div class="ms-3">
                                    <h5>Kegiatan Orientasi Lapangan Peningkatan Kapasitas</h5>
                                    <p class="text-muted">Kegiatan Orientasi Lapangan Peningkatan Kapasitas dan Wawasan Perangkat dan Staf Desa Dalung Tahun 2024, pada Rabu-Kamis (29-31 Mei 2024)...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistik Penduduk -->
                <div class="col-lg-4">
                    <h4 class="mb-4">Statistik Penduduk</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-6 mb-3">
                                    <i class="fas fa-users fa-2x mb-2 text-primary"></i>
                                    <h5>5787</h5>
                                    <p class="small">Kepala Keluarga</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <i class="fas fa-male fa-2x mb-2 text-success"></i>
                                    <h5>12,081</h5>
                                    <p class="small">Laki-laki</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-female fa-2x mb-2 text-danger"></i>
                                    <h5>11,404</h5>
                                    <p class="small">Perempuan</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-users fa-2x mb-2 text-info"></i>
                                    <h5>23,458</h5>
                                    <p class="small">Total Penduduk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Links -->
    <div class="social-links">
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>