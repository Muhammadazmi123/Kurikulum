@include('layouts.header')
@include('layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Jadwal Pelajaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Jadwal Pelajaran</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> Tabel Edit Jadwal Pelajaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/jadwal_pelajaran" type="button" class="btn btn-primary mb-3"><i
                                    class="fa-solid fa-arrow-left"></i> Kembali</a>
                            <table class="table table-bordered table-hover">
                                @foreach ($jadwal_pelajaran as $p)
                                    <form action="/jadwal_pelajaran/update" method="post">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                            <input type="hidden" name="id" value="{{ $p->id }}">
                                            <label for="exampleInputEmail1" class="form-label">Hari</label>
                                            <input type="text" required="required" name="hari"
                                                value="{{ $p->hari }}" class="form-control"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Nama</label>
                                            <input type="text" required="required" name="nama"
                                                value="{{ $p->nama }}" class=" form-control">
                                        </div>
                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                    </form>
                                @endforeach
                        </div>
                        </table>
                    </div>
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
</div>

@include('layouts.footer')

<!-- Bootstrap -->\
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
