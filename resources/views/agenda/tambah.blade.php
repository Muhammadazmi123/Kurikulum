@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
<!-- Main content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Tabel Agenda</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <form action="/agenda/store" method="post">
                {{ csrf_field() }}
                <a href="/agenda"> Kembali</a>
                <tbody>
                  <tr>
                    <td> Nama Kegiatan<input type="text" name="nama_kegiatan"></td>
                  </tr>
                  <tr>
                    <td> Implementasi Kurikulum<input type="text" name="implementasi_kurikulum"></td>
                  </tr>
                  <tr>
                    <td><input type="submit" value="Simpan Data"></td>
                  </tr>
                </tbody>
              </form>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->


@include('layouts.footer')