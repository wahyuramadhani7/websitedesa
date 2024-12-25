<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infografis Desa Blumbangrejo</title>
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
        
        .infographic-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }

        .infographic-card:hover {
            transform: translateY(-5px);
        }

        .infographic-icon {
            font-size: 3rem;
            color: #2E8B57;
            margin-bottom: 20px;
        }

        .infographic-title {
            color: #2E8B57;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .infographic-value {
            font-size: 2rem;
            font-weight: bold;
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
                        <a class="nav-link" href="#">APBDes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">UMKM Desa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Infografis Section -->
    <div class="container">
        <h2 class="section-title">INFOGRAFIS DESA BLUMBANGREJO</h2>
        <div class="row mt-5">
            <!-- Luas Wilayah -->
            <div class="col-md-4">
                <div class="card infographic-card p-4">
                    <div class="text-center">
                        <i class="fas fa-map infographic-icon"></i>
                        <h4 class="infographic-title">Luas Wilayah</h4>
                        <p class="infographic-value">12,5 km<sup>2</sup></p>
                    </div>
                </div>
            </div>
  
            <!-- Jumlah Penduduk -->
            <div class="col-md-4">
                <div class="card infographic-card p-4">
                    <div class="text-center">                       
                        <i class="fas fa-users infographic-icon"></i>
                        <h4 class="infographic-title">Jumlah Penduduk</h4>
                        <p class="infographic-value">6.542 Jiwa</p>
                    </div>
                </div>
            </div>

            <!-- Jumlah Keluarga -->
            <div class="col-md-4">
                <div class="card infographic-card p-4">
                    <div class="text-center">
                        <i class="fas fa-home infographic-icon"></i>
                        <h4 class="infographic-title">Jumlah Keluarga</h4>
                        <p class="infographic-value">1.738 KK</p>  
                    </div>
                </div>
            </div>

            <!-- Potensi Pertanian -->
            <div class="col-md-4">  
                <div class="card infographic-card p-4">
                    <div class="text-center">
                        <i class="fas fa-seedling infographic-icon"></i>
                        <h4 class="infographic-title">Potensi Pertanian</h4>
                        <p class="infographic-value">325 Hektar</p>
                    </div>  
                </div>
            </div>

            <!-- Fasilitas Pendidikan -->
            <div class="col-md-4"> 
                <div class="card infographic-card p-4">
                    <div class="text-center">
                        <i class="fas fa-school infographic-icon"></i>  
                        <h4 class="infographic-title">Fasilitas Pendidikan</h4>
                        <p class="infographic-value">12 Sekolah</p>
                    </div>
                </div>
            </div>

            <!-- Infrastruktur Jalan -->  
            <div class="col-md-4">
                <div class="card infographic-card p-4"> 
                    <div class="text-center">
                        <i class="fas fa-road infographic-icon"></i>
                        <h4 class="infographic-title">Infrastruktur Jalan</h4>  
                        <p class="infographic-value">32 km</p>
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