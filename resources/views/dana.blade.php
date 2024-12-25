<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APBDes Desa Blumbangrejo</title>
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
        
        .budget-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }

        .budget-card:hover {
            transform: translateY(-5px);
        }

        .budget-icon {
            font-size: 3rem;
            color: #2E8B57;
            margin-bottom: 20px;
        }

        .budget-title {
            color: #2E8B57;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .budget-value {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .budget-subtitle {
            color: #666;
            font-size: 0.9rem;
        }

        .progress {
            height: 10px;
            margin-top: 15px;
        }

        .progress-bar {
            background-color: #2E8B57;
        }

        .detail-section {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .table-budget {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .table-budget thead {
            background-color: #2E8B57;
            color: white;
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
                        <a class="nav-link" href="{{ route('beranda') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('infografis') }}">Infografis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelayanan') }}">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">APBDes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">UMKM Desa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- APBDes Section -->
    <div class="container">
        <h2 class="section-title">APBDES DESA BLUMBANGREJO 2024</h2>
        
        <!-- Summary Cards -->
        <div class="row mt-5">
            <!-- Total Anggaran -->
            <div class="col-md-4">
                <div class="card budget-card p-4">
                    <div class="text-center">
                        <i class="fas fa-money-bill-wave budget-icon"></i>
                        <h4 class="budget-title">Total Anggaran</h4>
                        <p class="budget-value">Rp 2.5 M</p>
                        <p class="budget-subtitle">Tahun Anggaran 2024</p>
                    </div>
                </div>
            </div>

            <!-- Realisasi Anggaran -->
            <div class="col-md-4">
                <div class="card budget-card p-4">
                    <div class="text-center">
                        <i class="fas fa-chart-pie budget-icon"></i>
                        <h4 class="budget-title">Realisasi Anggaran</h4>
                        <p class="budget-value">75%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sisa Anggaran -->
            <div class="col-md-4">
                <div class="card budget-card p-4">
                    <div class="text-center">
                        <i class="fas fa-wallet budget-icon"></i>
                        <h4 class="budget-title">Sisa Anggaran</h4>
                        <p class="budget-value">Rp 625 JT</p>
                        <p class="budget-subtitle">25% dari Total Anggaran</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Section -->
        <div class="detail-section">
            <table class="table table-hover table-budget">
                <thead>
                    <tr>
                        <th>Kategori Anggaran</th>
                        <th>Alokasi</th>
                        <th>Realisasi</th>
                        <th>Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Penyelenggaraan Pemerintahan Desa</td>
                        <td>Rp 750.000.000</td>
                        <td>Rp 600.000.000</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembangunan Desa</td>
                        <td>Rp 1.000.000.000</td>
                        <td>Rp 750.000.000</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pembinaan Kemasyarakatan</td>
                        <td>Rp 500.000.000</td>
                        <td>Rp 350.000.000</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pemberdayaan Masyarakat</td>
                        <td>Rp 250.000.000</td>
                        <td>Rp 175.000.000</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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