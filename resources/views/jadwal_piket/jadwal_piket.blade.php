@include('layouts.header')
@include('layouts.sidebar')
<title>Jadwal Piket</title>
<link rel="stylesheet" href="{{ asset('dist') }}/assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="{{ asset('dist') }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('dist') }}/assets/extensions/sweetalert2/sweetalert2.min.css">

</head>

<body>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Jadwal Piket</h3>
                    {{-- <p class="text-subtitle text-muted">Powerful interactive tables with datatables (jQuery required)</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ asset('dist') }}index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jadwal Piket</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Data Jadwal Piket
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal"
                        data-bs-target="#tambahModal">
                        + Tambah Data
                    </button>
                    <button type="button" class="btn btn-outline-success mb-3" data-bs-toggle="modal"
                        data-bs-target="#import">
                        Import
                    </button>
                    <a href="/export" class="btn btn-outline-success mb-3">Export</a>
                    <table class="table table-lg">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Siswa</th>
                                <th>Hari</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php $id=1 @endphp
                        @foreach ($jadwal_piket as $p)
                            <tbody>
                                <tr>
                                    <td>{{ $id++ }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->hari }}</td>
                                    <td>
                                        <a href="/jadwal_piket/edit/{{ $p->id }}"
                                            class="btn icon btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                                        |
                                        <a href="/jadwal_piket/hapus/{{ $p->id }}"
                                            class="btn icon btn-sm btn-danger"><i class="bi bi-x"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
        {{-- Modal --}}
        <div class="modal fade text-left" id="import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title white" id="myModalLabel110">Success Modal
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="file" name="file" class="form-control" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Kembali</span>
                        </button>
                        <button type="submit" class="btn btn-success ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Kirim</span>
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal  -->
        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Import Excel
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/jadwal_piket/store" method="post">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama</label>
                                <input type="text" name="nama" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Hari</label>
                                <input type="text" name="hari" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" value="Simpan Data" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->
        </div>
        @include('layouts.footer')
        <script src="{{ asset('dist') }}/assets/extensions/jquery/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
            integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
            integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('dist') }}/assets/extensions/sweetalert2/sweetalert2.min.js"></script>>
        <script src="{{ asset('dist') }}/assets/js/pages/sweetalert2.js"></script>>

</body>

</html>
