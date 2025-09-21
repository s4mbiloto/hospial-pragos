<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pragos Hospital - Dokter Kami</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      color: #333;
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

    /* Judul */
    h2 {
      text-align: center;
      margin: 40px 0 20px;
    }

    /* Grid dokter */
    .dokter-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
      gap: 30px;
      padding: 0 50px 50px;
    }
    .dokter-card {
      display: flex;
      gap: 20px;
      padding: 20px;
      border-radius: 12px;
      background: #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      align-items: center;
    }
    .dokter-card img {
      width: 120px;
      height: auto;
      border-radius: 10px;
      object-fit: cover;
    }
    .dokter-info h3 {
      margin: 0 0 5px;
      font-size: 18px;
      font-weight: bold;
    }
    .dokter-info p {
      margin: 4px 0;
      font-size: 14px;
    }
    .jadwal {
      font-size: 13px;
      margin-top: 8px;
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
    
    <!-- Tombol Logout di kanan -->
    <div class="logout">
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" style="background:none; border:none; cursor:pointer;">
                <img src="{{ asset('images/keluar.png') }}" alt="Logout" class="logout-icon">
            </button>
        </form>
     </div>
</div>

  <!-- Judul -->
  <h2>Dokter Kami</h2>

  <!-- Grid dokter -->
  <div class="dokter-container">

    <!-- Card 1 -->
    <div class="dokter-card">
      <img src="{{ asset('images/dokter2.jpg') }}" alt="Dr Andi Wiradeni">
      <div class="dokter-info">
        <h3>Spesialis Bedah</h3>
        <p>dr. Andi Wiradeni</p>
        <p><strong>Poliklinik:</strong> Reguler & Aster</p>
        <p class="jadwal">
          SENIN : 13.30 - 16.00 <br>
          SELASA : 14.30 - 17.00 <br>
          RABU : 16.00 - 17.00 <br>
          KAMIS : 15.30 - 17.00 <br>
          JUMAT : 13.00 - 15.00
        </p>
        <p><strong>Telp:</strong> 0895-6476-2345</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="dokter-card">
      <img src="{{ asset('images/dokter 1.jpg') }}" alt="Dr Alesia Novita">
      <div class="dokter-info">
        <h3>Spesialis Kebidanan & Kandungan</h3>
        <p>dr. Alesia Novita</p>
        <p><strong>Poliklinik:</strong> Reguler & Aster</p>
        <p class="jadwal">
          SENIN : 12.45 - 15.30 <br>
          SELASA : 13.45 - 14.30 <br>
          RABU : 15.00 - 16.00 <br>
          KAMIS : 14.30 - 17.00 <br>
          JUMAT : 12.20 - 13.00
        </p>
        <p><strong>Telp:</strong> 0895-8795-2345</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="dokter-card">
      <img src="{{ asset('images/dokter4.jpg') }}" alt="Dr Arfah Lena">
      <div class="dokter-info">
        <h3>Spesialis THT</h3>
        <p>dr. Arfah Lena</p>
        <p><strong>Poliklinik:</strong> Reguler</p>
        <p class="jadwal">
          SENIN : 13.30 - 16.00 <br>
          SELASA : 14.30 - 17.00 <br>
          RABU : 16.00 - 17.00 <br>
          KAMIS : 15.30 - 17.00 <br>
          JUMAT : 13.00 - 15.00
        </p>
        <p><strong>Telp:</strong> 0895-6798-2367</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="dokter-card">
      <img src="{{ asset('images/dokter 3.jpg') }}" alt="Dr Anies Nuringtyas">
      <div class="dokter-info">
        <h3>Spesialis Anak</h3>
        <p>dr. Anies Nuringtyas</p>
        <p><strong>Poliklinik:</strong> Aster</p>
        <p class="jadwal">
          SENIN : 12.45 - 15.30 <br>
          SELASA : 13.45 - 14.30 <br>
          RABU : 15.00 - 16.00 <br>
          KAMIS : 14.30 - 17.00 <br>
          JUMAT : 12.20 - 13.00
        </p>
        <p><strong>Telp:</strong> 0895-9712-0867</p>
      </div>
    </div>
  </div>
</body>
</html>
