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
  <h3>Edit Pegawai</h3>

  <a href="/agenda"> Kembali</a>

  <br />
  <br />

  @foreach($tb_agenda as $p)
  <form action="/agenda/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->id }}"> <br />
    Nama Kegiatan<input type="text" required="required" name="nama" value="{{ $p->nama_kegiatan}}"> <br />
    Implementasi Kurikulum <input type="text" required="required" name="jabatan" value="{{ $p->implementasi_kurikulum }}"> <br />
    <input type="submit" value="Simpan Data">
  </form>
  @endforeach

</body>

</html>