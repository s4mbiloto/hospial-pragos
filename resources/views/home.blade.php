@extends('layouts.app')
@section('title','Pragos Hospital')

@section('content')
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
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

    /* Hero Section */
    .hero {
        position: relative;
        background: url('{{ asset("images/dokter1.png") }}') no-repeat center center/cover;
        background-position:30% 20%; 
        height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hero::after {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.3);
    }

    .hero-text {
        position: relative;
        color: white;
        z-index: 2;
    }

    .hero-text h1 {
        font-size: 40px;
        font-weight: bold;
        margin: 0;
    }

    .hero-text p {
        margin-top: 15px;
        font-size: 18px;
    }

    /* Tentang Kami */
    .content {
        padding: 40px 80px;
        background: #fff;
        text-align: center;
    }

    .content h2 {
        margin-bottom: 20px;
        font-size: 22px;
    }

    .content p {
        line-height: 1.8;
        font-size: 16px;
        color: #444;
    }

    /* Header */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 30px;
        flex-wrap: wrap;
    }

    .logo-title {
        display: flex;
        align-items: center;
        gap: 20px;
        flex: 1;
    }

    .logo-title img {
        width: 120px;
    }

    .logo-title h1 {
        margin: 0;
        font-size: 36px;
        font-weight: bold;
    }

    .map-section {
        flex: 1;
        text-align: center;
    }

    .map-section img {
        width: 400px;
        border-radius: 10px;
        display: block;
        margin: 0 auto;
    }

    .map-section p {
        margin-top: 12px;
        font-size: 16px;
        font-weight: bold;
    }

    /* Footer */
    footer {
        background: #cce2ff;
        padding: 25px;
        border-radius: 20px 20px 0 0;
        margin-top: auto;
    }

    footer .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }

    footer h3 {
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: bold;
    }

    footer ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    footer ul li {
        margin: 6px 0;
    }

    .emergency {
        background: white;
        padding: 12px;
        border-radius: 12px;
        text-align: center;
        font-weight: bold;
    }

    .emergency span {
        display: block;
        color: red;
        font-size: 20px;
    }

    .copyright {
        text-align: center;
        font-size: 13px;
        margin-top: 20px;
    }
</style>

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

<!-- Hero Section -->
<div class="hero">
    <div class="hero-text">
        <h1>SELAMAT DATANG DI<br>PRAGOS HOSPITAL</h1>
        <p>Layanan kesehatan terpercaya dengan fasilitas lengkap, 24 jam untuk Anda.</p>
    </div>
</div>

<!-- Tentang Kami -->
<div class="content">
    <h2><b>Tentang Kami</b></h2>
    <p>
        Pragos Hospital hadir sebagai solusi layanan kesehatan terpercaya bagi masyarakat. 
        Kami menyediakan berbagai fasilitas seperti rawat inap, UGD 24 jam, dan apotek lengkap, 
        guna memastikan pasien mendapatkan penanganan medis yang cepat, tepat, dan menyeluruh.
    </p>
</div>

<!-- Footer -->
<div class="header">
    <div class="logo-title">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>PRAGOS HOSPITAL</h1>
    </div>

    <div class="map-section">
        <img src="{{ asset('images/map.png') }}" alt="Lokasi Rumah Sakit">
        <p>JL. Sambiloto Raya NO.99 RT 009/009, Jawa Barat Indonesia</p>
    </div>
</div>

<footer>
    <div class="footer-container">
        <div>
            <h3>Hubungi :</h3>
            <ul>
                <li>📧 pragoshospital@gmail.com</li>
                <li>📷 @pragoshospital</li>
                <li>📘 PragosHospital.</li>
            </ul>
        </div>

        <div>
            <h3>Navigasi :</h3>
            <ul>
                <li>Beranda</li>
                <li>Dokter</li>
                <li>Layanan</li>
                <li>Kontak</li>
            </ul>
        </div>

        <div>
            <h3>Darurat :</h3>
            <div class="emergency">
                <span>📞 0812-3456-7890</span>
                Layanan 24 Jam | Appointment Dokter
            </div>
        </div>
    </div>

    <div class="copyright">
        © 2025 Pragos Hospital. Melayani dengan integritas dan kepedulian.
    </div>
</footer>
@endsection
