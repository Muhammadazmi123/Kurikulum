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

  <a href="/agenda/tambah"> + Tambah Pegawai Baru</a>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nama Kegiatan</th>
            <th>Implementasi Kurikulum</th>
          </tr>
        </thead>
        @foreach($tb_agenda as $p)
        <tbody>
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
    </div>
    <!-- /.card-body -->
  </div>


</body>

</html>