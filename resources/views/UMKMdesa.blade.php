<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Desa Blumbangrejo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Keeping consistent styles */
        .navbar {
            background-color: #2E8B57 !important; 
            padding: 15px 0;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
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
        
        .umkm-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
            overflow: hidden;
        }

        .umkm-card:hover {
            transform: translateY(-5px);
        }

        .umkm-img {
            height: 200px;
            object-fit: cover;
        }

        .category-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #2E8B57;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
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

        .filter-button {
            background-color: #2E8B57;
            color: white;
            border: none;
            margin: 5px;
            transition: all 0.3s ease;
        }

        .filter-button:hover {
            background-color: #236B42;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">
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
                        <a class="nav-link active" href="{{ route('UMKMdesa') }}">UMKM Desa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- UMKM Section -->
    <div class="container">
        <h2 class="section-title">UMKM DESA BLUMBANGREJO</h2>
        
        <!-- Filter Buttons -->
        <div class="text-center mb-4">
            <button class="btn filter-button">Semua</button>
            <button class="btn filter-button">Makanan</button>
            <button class="btn filter-button">Kerajinan</button>
            <button class="btn filter-button">Pertanian</button>
            <button class="btn filter-button">Jasa</button>
        </div>

        <div class="row mt-4">
            <!-- UMKM Card 1 -->
            <div class="col-md-4">
                <div class="card umkm-card">
                    <span class="category-badge">Makanan</span>
                    <img src="/images/UMKM.jpg" class="card-img-top umkm-img" alt="Keripik Singkong">
                    <div class="card-body">
                        <h5 class="card-title">Keripik Singkong "Bu Siti"</h5>
                        <p class="card-text">Keripik singkong dengan berbagai varian rasa. Produksi rumahan dengan bahan berkualitas.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-map-marker-alt"></i> RT 03/RW 02</span>
                            <a href="#" class="btn btn-success">Hubungi</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 2 -->
            <div class="col-md-4">
                <div class="card umkm-card">
                    <span class="category-badge">Kerajinan</span>
                    <img src="/images/UMKM2.jpg" class="card-img-top umkm-img" alt="Anyaman Bambu">
                    <div class="card-body">
                        <h5 class="card-title">Anyaman Bambu "Kreatif"</h5>
                        <p class="card-text">Kerajinan anyaman bambu tradisional dengan sentuhan modern. Tersedia berbagai model.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-map-marker-alt"></i> RT 05/RW 01</span>
                            <a href="#" class="btn btn-success">Hubungi</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UMKM Card 3 -->
            <div class="col-md-4">
                <div class="card umkm-card">
                    <span class="category-badge">Pertanian</span>
                    <img src="/images/UMKM3.jpg" class="card-img-top umkm-img" alt="Tani Makmur">
                    <div class="card-body">
                        <h5 class="card-title">Tani Makmur</h5>
                        <p class="card-text">Produk pertanian organik berkualitas. Sayuran dan buah-buahan segar dari kebun sendiri.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-map-marker-alt"></i> RT 02/RW 03</span>
                            <a href="#" class="btn btn-success">Hubungi</a>
                        </div>
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