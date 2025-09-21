@if($kamar->pasien->count() > 0)
  <h3>Pasien di Kamar {{ $kamar->no_kamar }}</h3>
  <table .border="1" cellpadding="8" cellspacing="0" width="100%">
    <tr>
      <th>Nama</th>
      <th>Umur</th>
      <th>Diagnosa</th>
    </tr>
    @foreach($kamar->pasien as $p)
      <tr>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->umur }}</td>
        <td>{{ $p->diagnosa }}</td>
      </tr>
    @endforeach
  </table>
@else
  <p>Tidak ada pasien di kamar ini.</p>
@endif
