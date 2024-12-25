<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Desa Kersik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar {
            background-color: #DC3545 !important;
            padding: 15px 0;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
        }
        
        .navbar-brand img {
            margin-right: 15px;
        }
        
        .navbar-nav .nav-link {
            color: white !important;
            padding: 10px 20px;
        }
        
        .logo-container {
            text-align: center;
            margin: 50px 0;
        }
        
        .village-logo {
            max-width: 300px;
            margin-bottom: 20px;
        }
        
        .village-name {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 20px 0;
        }
        
        .village-location {
            color: #666;
            margin-bottom: 40px;
        }
        
        .vision-mission {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
        }
        
        .mission-list {
            list-style-type: none;
            padding: 0;
        }
        
        .mission-list li {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
        }
        
        .mission-list li:before {
            content: "";
            position: absolute;
            left: 0;
            top: 8px;
            width: 8px;
            height: 8px;
            background-color: #DC3545;
            border-radius: 50%;
        }
        
        .visitor-count {
            position: fixed;
            left: 20px;
            bottom: 20px;
            background: rgba(255, 192, 203, 0.9);
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
        }
        
        .complaint-button {
            position: fixed;
            right: 20px;
            bottom: 20px;
            background: rgba(255, 192, 203, 0.9);
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
        }
        
        .complaint-button:hover {
            background: pink;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                
                <div>
                    <h5 class="mb-0">Desa Kersik</h5>
                    <small>Kabupaten Kutai Kartanegara</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Profil Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Infografis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Listing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">IDM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PPID</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Logo dan Nama Desa -->
    <div class="container">
        <div class="logo-container">
            <h1 class="village-name">DESA KERSIK</h1>
            <p class="village-location">Kecamatan Marang Kayu, Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur</p>
        </div>
    </div>

    <!-- Visi & Misi -->
    <section class="vision-mission">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h2 class="section-title">VISI</h2>
                    <p class="lead">
                        "Desa Kersik sebagai Desa Wisata yang mampu mengelola potensi Desa dan pembangunan berkelanjutan untuk mewujudkan masyarakat yang sejahtera"
                    </p>
                </div>
                <div class="col-md-12">
                    <h2 class="section-title">MISI</h2>
                    <ul class="mission-list">
                        <li>Mewujudkan tata kelola pemerintahan yang baik</li>
                        <li>Mengembangkan kegiatan keagamaan</li>
                        <li>Meningkatkan kualitas pendidikan dan sumber daya manusia</li>
                        <li>Mengembangkan teknologi informasi</li>
                        <li>Pembangunan infrastruktur, sarana dan prasarana</li>
                        <li>Mengembangkan seluruh usaha potensi desa</li>
                        <li>Meningkatkan kualitas dan membangun kesadaran kesehatan masyarakat</li>
                        <li>Meningkatkan perekonomian dan kesejahteraan masyarakat</li>
                        <li>Membangun kerjasama dan kemitraan strategis</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Visitor Counter -->
    <div class="visitor-count">
        <i class="fas fa-users me-2"></i>
        Kunjungan Hari Ini
        <br>
        <strong>504</strong>
    </div>

    <!-- Complaint Button -->
    <a href="#" class="complaint-button">
        <i class="fas fa-headphones me-2"></i>
        Pengaduan
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>