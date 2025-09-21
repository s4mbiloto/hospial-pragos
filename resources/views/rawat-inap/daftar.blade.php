<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Pasien Rawat Inap</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f6f9; }
    .form-container {
      max-width: 500px; margin: 50px auto; background: white;
      padding: 20px; border-radius: 10px; box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }
    input, select, textarea {
      width: 100%; padding: 10px; margin: 10px 0; border-radius: 6px; border: 1px solid #ccc;
    }
    button {
      padding: 12px; background: #4a6cf7; color: white;
      border: none; border-radius: 8px; cursor: pointer;
    }
    button:hover { background: #3753c5; }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Form Pendaftaran Pasien</h2>
    <form method="POST" action="{{ route('rawat-inap.store') }}">
      @csrf

      <label>Nama</label>
      <input type="text" name="nama" required>

      <label>Umur</label>
      <input type="number" name="umur" required>

      <label>Diagnosa</label>
      <textarea name="diagnosa" required></textarea>

      <label>Pilih Kamar</label>
      <select name="id_kamar" required>
        <option value="">-- Pilih Kamar --</option>
        @foreach($kamar as $row)
          <option value="{{ $row->id_kamar }}">Kamar {{ $row->no_kamar }}</option>
        @endforeach
      </select>

      <button type="submit">Daftar</button>
    </form>
  </div>
</body>
</html>
