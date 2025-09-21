<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Konsultasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('{{ asset('images/konsul.png') }}') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        .overlay {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 800px;
            background: white;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            overflow-x: auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #007BFF;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 8px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }
        button {
            width: 100%;
            background: #007BFF;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            table-layout: fixed;
            word-wrap: break-word;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            word-break: break-word;
        }
        th {
            background: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="overlay">
    <div class="container">
        <h2>Form Konsultasi</h2>
        
        @if(session('success'))
            <div style="color: green; text-align:center; margin-bottom:15px;">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('konsultasi.store') }}">
            @csrf
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>

            <label>NIK</label>
            <input type="text" name="nik" required>

            <label>Keluhan</label>
            <textarea name="keluhan" rows="4" required></textarea>

            <button type="submit">Kirim Konsultasi</button>
        </form>

        <!-- Tombol Kembali -->
        <div style="text-align:center; margin-top:20px;">
            <a href="{{ route('layanan') }}" 
            style="background:#007BFF; color:white; padding:10px 20px; text-decoration:none; border-radius:5px;">
            ← Kembali
            </a>
        </div>

        <h2 style="margin-top:30px;">Data Konsultasi</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Keluhan</th>
                <th>Tanggal</th>
            </tr>
            @foreach($konsultasi as $i => $row)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->nik }}</td>
                <td>{{ $row->keluhan }}</td>
                <td>{{ $row->tanggal }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>
