@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')
<!DOCTYPE html>
<html>

<head>
  <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

  <h2>www.malasngoding.com</h2>
  <h3>Data Pegawai</h3>

  <a href="/agenda/tambah"> + Tambah Pegawai Baru</a>

  <br />
  <br />

  <table border="1">
    <tr>
      <th>Nama Kegiatan</th>
      <th>Implementasi Kurikulum</th>
    </tr>
    @foreach($tb_agenda as $p)
    <tr>
      <td>{{ $p->nama_kegiatan }}</td>
      <td>{{ $p->implementasi_kurikulum }}</td>
      <td>
        <a href="/agenda/edit/{{ $p->id }}">Edit</a>
        |
        <a href="/agenda/hapus/{{ $p->id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </table>


</body>

</html>