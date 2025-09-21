<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Apotek Pragos</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }

        /* Title */
        .title {
            text-align: center;
            margin: 30px 0 20px 0;
        }

        .title h2 {
            margin: 5px 0;
            font-size: 28px;
        }

        /* Kategori tombol */
        .categories {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .categories button {
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            background: #3ba7db;
            color: white;
            font-size: 15px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
        }

        .categories button:hover {
            background: #2a85b6;
            transform: translateY(-3px);
        }

        /* Grid obat */
        .obat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            max-width: 1100px;
            margin: auto;
            padding: 0 20px;
        }

        .obat-card {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            text-align: center;
            transition: transform 0.2s;
        }

        .obat-card:hover {
            transform: translateY(-5px);
        }

        .obat-card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .obat-card h3 {
            font-size: 16px;
            margin: 5px 0;
        }

        .obat-card p {
            color: #333;
            font-weight: bold;
            margin: 0;
        }

        /* Tombol kembali */
        .btn-back {
            display: block;
            width: max-content;
            margin: 40px auto;
            padding: 12px 25px;
            background: #4a6cf7;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            transition: background 0.3s, transform 0.2s;
        }

        .btn-back:hover {
            background: #3753c5;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Judul -->
    <div class="title">
        <h2>Apotek PRAGOS</h2>
    </div>

    <!-- Kategori -->
    <div class="categories">
        <button onclick="filterObat('all')">Semua</button>
        <button onclick="filterObat('obat')">Obat</button>
        <button onclick="filterObat('ibu-anak')">Ibu & Anak</button>
        <button onclick="filterObat('alat')">Alat Kesehatan</button>
        <button onclick="filterObat('herbal')">Herbal</button>
    </div>

    <!-- Grid obat -->
    <div class="obat-grid">
       <!-- Obat -->
        <div class="obat-card obat">
            <img src="images/paracetamol.jpg" alt="Paracetamol">
            <h3>Paracetamol 500mg</h3>
            <p>Rp 10.000</p>
        </div>
        <div class="obat-card obat">
            <img src="images/amoxicillin.jpg" alt="Amoxicillin">
            <h3>Amoxicillin 500mg</h3>
            <p>Rp 15.000</p>
        </div>
        <div class="obat-card obat">
            <img src="images/ibuprofen.jpg" alt="Ibuprofen">
            <h3>Ibuprofen 400mg</h3>
            <p>Rp 18.000</p>
        </div>
        <div class="obat-card obat">
            <img src="images/cetirizine.jpg" alt="Cetirizine">
            <h3>Cetirizine 10mg</h3>
            <p>Rp 12.000</p>
        </div>
        <div class="obat-card obat">
            <img src="images/omeprazol.jpg" alt="Omeprazole">
            <h3>Omeprazole 20mg</h3>
            <p>Rp 22.000</p>
        </div>

        <!-- Ibu & Anak -->
        <div class="obat-card ibu-anak">
            <img src="images/sgm.jpg" alt="Susu Formula">
            <h3>Susu Formula Bayi</h3>
            <p>Rp 150.000</p>
        </div>
        <div class="obat-card ibu-anak">
            <img src="images/vitamin.jpg" alt="Vitamin Anak">
            <h3>Vitamin Anak</h3>
            <p>Rp 30.000</p>
        </div>
        <div class="obat-card ibu-anak">
            <img src="images/obat demam.jpg" alt="Obat Demam Anak">
            <h3>Obat Demam Anak</h3>
            <p>Rp 20.000</p>
        </div>
        <div class="obat-card ibu-anak">
            <img src="images/minyak telon.jpg" alt="Minyak Telon">
            <h3>Minyak Telon</h3>
            <p>Rp 25.000</p>
        </div>
        <div class="obat-card ibu-anak">
            <img src="images/obat batuk.jpg" alt="Obat Batuk Anak">
            <h3>Obat Batuk Anak</h3>
            <p>Rp 18.000</p>
        </div>

        <!-- Alat Kesehatan -->
        <div class="obat-card alat">
            <img src="images/masker.jpg" alt="Masker Medis">
            <h3>Masker Medis</h3>
            <p>Rp 5.000</p>
        </div>
        <div class="obat-card alat">
            <img src="images/termometer.jpg" alt="Termometer">
            <h3>Termometer Digital</h3>
            <p>Rp 50.000</p>
        </div>
        <div class="obat-card alat">
            <img src="images/handsanitizer.jpg" alt="Hand Sanitizer">
            <h3>Hand Sanitizer</h3>
            <p>Rp 20.000</p>
        </div>
        <div class="obat-card alat">
            <img src="images/plaster.jpg" alt="Plester">
            <h3>Plester Luka</h3>
            <p>Rp 8.000</p>
        </div>
        <div class="obat-card alat">
            <img src="images/gula darah.jpg" alt="Alat Cek Gula Darah">
            <h3>Alat Cek Gula Darah</h3>
            <p>Rp 120.000</p>
        </div>

        <!-- Herbal -->
        <div class="obat-card herbal">
            <img src="images/kunyit asam.jpg" alt="Jamu Kunyit Asam">
            <h3>Jamu Kunyit Asam</h3>
            <p>Rp 12.000</p>
        </div>
        <div class="obat-card herbal">
            <img src="images/batuk herbal.jpg" alt="Obat Batuk Herbal">
            <h3>Obat Batuk Herbal</h3>
            <p>Rp 25.000</p>
        </div>
        <div class="obat-card herbal">
            <img src="images/teh herbal.jpg" alt="Teh Jahe">
            <h3>Teh Jahe</h3>
            <p>Rp 15.000</p>
        </div>
        <div class="obat-card herbal">
            <img src="images/madu herbal.jpg" alt="Madu Herbal">
            <h3>Madu Herbal</h3>
            <p>Rp 50.000</p>
        </div>
        <div class="obat-card herbal">
            <img src="images/minyak kayu putih.jpg" alt="Minyak Kayu Putih">
            <h3>Minyak Kayu Putih</h3>
            <p>Rp 18.000</p>
        </div>
    </div>

    <!-- Tombol kembali -->
    <a href="{{ route('layanan') }}" class="btn-back">← Kembali</a>

    <script>
        function filterObat(category) {
            let items = document.querySelectorAll('.obat-card');
            items.forEach(item => {
                if (category === 'all') {
                    item.style.display = 'block';
                } else {
                    if (item.classList.contains(category)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        }
    </script>
</body>
</html>
