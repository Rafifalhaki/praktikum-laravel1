<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | Sistem Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fffaf0; /* warna latar belakang halaman */
        }
        .hero {
            background: linear-gradient(to right, #20c997, #0d6efd); /* hijau ke biru */
            color: white;
            text-align: center;
            padding: 100px 20px 60px;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .fitur {
            background-color: #f9f9f9;
            padding: 60px 20px;
        }
        .fitur h2 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
        }
        .fitur .card {
            border: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            border-radius: 12px;
        }
        .navbar {
            background-color: #20c997; /* hijau mint */
        }
        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }
        .btn-cta {
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg px-4">
        <a class="navbar-brand" href="#">Puskesmas App</a>
        <div class="ms-auto">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-light">Register</a>
            @endguest
        </div>
    </nav>

    <div class="hero">
        <h1>Selamat Datang di Sistem Puskesmas</h1>
        <p>Aplikasi manajemen data pasien, paramedik, unit kerja, dan pemeriksaan kesehatan</p>
        <a href="{{ auth()->check() ? route('beranda.index') : route('login') }}" class="btn btn-light btn-cta">Masuk Sekarang</a>
        @auth
            <p class="mt-3">Anda sudah login sebagai <strong>{{ Auth::user()->name }}</strong></p>
        @endauth
    </div>

    <section class="fitur">
        <div class="container">
            <h2>Fitur Aplikasi</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card p-4 text-center h-100">
                        <h5>Manajemen Pasien</h5>
                        <p>Kelola data pasien secara efisien dan akurat untuk berbagai keperluan medis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 text-center h-100">
                        <h5>Data Paramedik</h5>
                        <p>Catat dan perbarui informasi paramedik sesuai unit kerja dan spesialisasi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 text-center h-100">
                        <h5>Pemeriksaan</h5>
                        <p>Input hasil periksa dan pantau catatan medis pasien dari waktu ke waktu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4 text-muted">
        &copy; {{ date('Y') }} Aplikasi Puskesmas - Dibuat oleh Nawaf | STT Nurul Fikri
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
