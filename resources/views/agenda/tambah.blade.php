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

  <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
  <h3>Data Pegawai</h3>

  <a href="/agenda"> Kembali</a>

  <br />
  <br />

  <form action="/agenda/store" method="post">
    {{ csrf_field() }}
    Nama Kegiatan<input type="text" name="nama_kegiatan"> <br />
    Implementasi Kurikulum<input type="text" name="implementasi_kurikulum"> <br />
    <input type="submit" value="Simpan Data">
  </form>



</body>

</html>