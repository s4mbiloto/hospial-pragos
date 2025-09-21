<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Rawat Inap - Pragos Hospital</title>
  <style>
    body { margin: 0; font-family: Arial, sans-serif; background: #f4f6f9; }
    .hero { background: url('{{ asset('images/rame.jpg') }}') no-repeat center center/cover; height: 300px; background-position: 30% 20%; }
    .container { max-width: 900px; margin: -60px auto 50px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.2); }
    .text { text-align: center; margin: 20px 0; font-size: 40px; font-weight: bold; color: #333; }
    .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; }
    .card { background: #fff; padding: 25px; text-align: center; border-radius: 12px; font-weight: bold; font-size: 18px; box-shadow: 0 3px 8px rgba(0,0,0,0.2); cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; }
    .card:hover { transform: translateY(-5px); box-shadow: 0 6px 14px rgba(0,0,0,0.3); }
    .btn { display: inline-block; padding: 12px 25px; margin: 10px 5px; background: #4a6cf7; color: white; text-decoration: none; font-weight: bold; border-radius: 8px; transition: background 0.3s, transform 0.2s; }
    .btn:hover { background: #3753c5; transform: translateY(-3px); }
    #info { margin-top: 30px; padding: 20px; border-radius: 10px; background: #f9f9f9; box-shadow: 0 2px 6px rgba(0,0,0,0.1); display: none; }
  </style>
</head>
<body>
  <div class="hero"></div>

  <div class="container">
    <h2 class="text">Rawat Inap</h2>
    <div class="grid">
      @foreach($kamar as $row)
        <div class="card" onclick="showInfo('{{ $row->id_kamar }}')">
          Kamar {{ $row->no_kamar }}
        </div>
      @endforeach
    </div>
    <br>

    <a href="{{ route('layanan') }}" class="btn">← Kembali</a>
    <a href="{{ route('rawat-inap.daftar') }}" class="btn">+ Daftar Pasien</a>

    <div id="info"></div>
  </div>

  <script>
    function showInfo(id_kamar) {
      fetch("{{ url('/rawat-inap/lihat') }}/" + id_kamar)
        .then(res => res.text())
        .then(data => {
          const infoDiv = document.getElementById("info");
          infoDiv.innerHTML = data;
          infoDiv.style.display = "block";
        });
    }
  </script>
</body>
</html>
