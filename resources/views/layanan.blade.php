<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAGOS HOSPITAL - Layanan</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: #e3f1ff;
        }

        .navbar .logo {
            font-size: 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            width: 70px;
            height: 50px;
            margin-right: 10px;
        }

        .navbar .menu a {
            margin: 0 15px;
            text-decoration: none;
            color: #000;
            font-weight: 1000;
            position: relative;
            left: 250px;
        }

        .navbar .menu a:hover {
            color: #0077cc;
        }

        .logout-icon {
            width: 20px;
            height: 20px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .logout-icon:hover {
            transform: scale(1.1);
        }

        /* Background hero */
        .hero {
            background: url('{{ asset('images/hospital.jpg') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            text-align: center;
            background: rgba(255,255,255,0.7);
            padding: 40px;
            border-radius: 10px;
        }

        .overlay h2 {
            font-size: 30px;
            margin-bottom: 30px;
        }

        /* Layanan cards */
        .layanan-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .layanan-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: black;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 160px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .layanan-card img {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        .layanan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>

   <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
          <img src="{{ asset('images/logo.png') }}">    
            PRAGOS HOSPITAL
        </div>
        <div class="menu">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('dokter') }}">Dokter</a>
            <a href="{{ route('layanan') }}">Layanan</a>
        </div>
        
        <!-- Tombol Logout -->
        <div class="logout">
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; cursor:pointer;">
                    <img src="{{ asset('images/keluar.png') }}" alt="Logout" class="logout-icon">
                </button>
            </form>
        </div>
    </div>

    <!-- Background + Layanan -->
    <div class="hero">
        <div class="overlay">
            <h2>Layanan Tersedia</h2>
            <div class="layanan-container">

                <a href="{{ route('rawat-inap') }}" class="layanan-card">
                    <img src="{{ asset('images/rawat.png') }}" alt="Rawat Inap">
                    <p>Rawat Inap</p>
                </a>

                <a href="{{ route('apotek') }}" class="layanan-card">
                    <img src="{{ asset('images/obat.png') }}" alt="Apotek">
                    <p>Apotek</p>
                </a>

                <a href="{{ route('konsultasi.index') }}" class="layanan-card">
                    <img src="{{ asset('images/konsultasi.png') }}" alt="Konsultasi">
                    <p>Konsultasi</p>
                </a>

            </div>
        </div>
    </div>

</body>
</html>
