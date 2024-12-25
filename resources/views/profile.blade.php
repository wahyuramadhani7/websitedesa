<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa Blumbangrejo</title>
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
        
        
        .village-name {
            font-size: 3rem;
            font-weight: bold;
            margin: 20px 0;
            color: white;
        }
        
        .village-location {
            color: #eee;
            margin-bottom: 0;
        }
        
        .vision-mission {
            padding: 80px 0;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #2E8B57;
        }
        
        .mission-list {
            list-style-type: none;
            padding: 0;
        }
        
        .mission-list li {
            margin-bottom: 20px;
            padding-left: 30px;
            position: relative;
            font-size: 1.1rem;
        }
        
        .mission-list li:before {
            content: "\f058";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
            color: #2E8B57;
            font-size: 1.2rem;
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
                        <a class="nav-link" href="{{ route('beranda') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Infografis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Potensi Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transparansi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="container">
            <h1 class="village-name">DESA BLUMBANGREJO</h1>

        </div>
    </div>

    <!-- Visi & Misi -->
    <section class="vision-mission">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h2 class="section-title">VISI</h2>
                    <p class="lead">
                        "Terwujudnya Desa Blumbangrejo yang Maju, Mandiri, dan Sejahtera dengan berbasis pada Potensi Lokal, Teknologi, dan Pembangunan Berkelanjutan"
                    </p>
                </div>
                <div class="col-md-12">
                    <h2 class="section-title">MISI</h2>
                    <ul class="mission-list">
                        <li>Mewujudkan tata kelola pemerintahan yang transparan, akuntabel, dan partisipatif</li>
                        <li>Meningkatkan kualitas pendidikan dan pengembangan sumber daya manusia</li>
                        <li>Mengembangkan potensi ekonomi lokal berbasis pertanian, peternakan, dan UMKM</li>
                        <li>Meningkatkan infrastruktur, sarana, dan prasarana desa yang menunjang perekonomian</li>
                        <li>Menjalin kerjasama dengan berbagai pihak untuk mendukung pembangunan desa</li>
                        <li>Menciptakan lingkungan yang bersih, sehat, dan ramah lingkungan</li>
                        <li>Melestarikan seni, budaya, dan kearifan lokal sebagai aset desa</li>
                        <li>Mengoptimalkan pemanfaatan teknologi informasi untuk pelayanan publik dan promosi potensi desa</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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