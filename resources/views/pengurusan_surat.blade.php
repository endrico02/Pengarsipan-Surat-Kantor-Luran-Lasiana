@extends('home')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css') }}">
@endsection
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Pengurusan Surat</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="home" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Pengurusan Surat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-success" data-bs-toggle="modal" data-bs-target="#right-modal">Tambah Data Tamu</button> --}}
                    {{-- <div id="read" class="mt-3"></div> --}}
                    <div class="table-responsive mt-3">
                        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th>Antrian</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Perihal</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                               <tr>
                                    <td>{{ $item->no_antrian }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->perihal }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                    <td>
                                        @if ($item->opr_notif == 2)
                                        <button type="button" class="btn btn-warning btn-rounded" data-bs-toggle="modal"
                                        data-bs-target="#signup-modal{{ $item->id_tamu }}">
                                            {{-- <i class="far fa-file-pdf"></i>  --}}
                                            Lengkapi Data
                                        </button>    
                                        <a href="{{ asset('document/'.$item->document) }}" target="_blank" rel="noopener noreferrer" class="btn btn-warning btn-rounded">
                                            <i class="far fa-file-pdf"></i>
                                            File
                                        </a>  
                                        @endif
                                        @if ($item->opr_notif == 3)
                                            @if ($item->perihal == 'Surat Keterangan Usaha')
                                                <a href="surat_keterangan_usaha/{{ $item->id_tamu }}" target="_blank" rel="noopener noreferrer" class="btn btn-warning btn-rounded">
                                                    <i class="far fa-file-pdf"></i>
                                                    Print
                                                </a>
                                            @endif
                                        @endif
                                        
                                    </td>
                               </tr>
                               <div id="signup-modal{{ $item->id_tamu }}" class="modal fade" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
            
                                            <div class="modal-body">
                                                <div class="text-center mt-2 mb-4">
                                                    <a href="index.html" class="text-success">
                                                        <span><img class="me-2" src="../assets/images/logo-icon.png"
                                                                alt="" height="18"><img
                                                                src="../assets/images/logo-text.png" alt=""
                                                                height="18"></span>
                                                    </a>
                                                </div>
                                                <?php
                                                    $edit = \DB::select("SELECT * FROM tamu WHERE id_tamu='$item->id_tamu'"); 
                                                ?>
                                                @foreach ($edit as $row)
                                                <form class="ps-3 pe-3" action="pengurusan_surat/lengkapi_data/{{ $item->id_tamu }}" method="POST">
                                                    @csrf
                                                    @if ($row->perihal == 'Surat Keterangan Usaha')
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="username">Usaha :</label>
                                                        <input class="form-control" type="text" name="usaha" placeholder="Usaha apa yang anda miliki ?" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="username">Alamat Tempat Usaha :</label>
                                                        <input class="form-control" name="alamat" type="text" placeholder="Dimana alamat tempat usaha anda ?" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="username">Jenis Keperluan :</label>
                                                        <input class="form-control" type="text" name="jenis_keperluan" placeholder="Untuk apa anda membuat surat keterangan ini ?" required>
                                                    </div>
                                                    @endif
                        
                                                    <div class="form-group mb-3 text-center">
                                                        <button id="submit" class="btn btn-primary" type="submit">Proses</button>
                                                    </div>
            
                                                </form>
                                                @endforeach
                                                
            
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                       
                    </div>
                    
                    <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-right">
                            <div class="modal-content">
                                {{-- <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Tambah Data Tamu</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-hidden="true"></button>
                                </div> --}}
                                <div class="modal-body">
                                    <div class="text-center mb-2">
                                        <a href="index.html" class="text-success">
                                            <span><img
                                                    src="logo.png" alt=""
                                                    height="48"></span>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <h4 class="mt-0 mb-5">Sistem Informasi Pengarsipan Kelurahan Lasiana</h4>
                                        {{-- <p>Kelurahan Lasiana</p> --}}
                                       
                                    </div>
                                   

                                    <form class="ps-3 pe-3" action="#">

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="username">Name</label>
                                            <input class="form-control" type="text" id="username"
                                                required="" placeholder="Nama Lengkap">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="emailaddress">Alamat</label>
                                            <input class="form-control" type="text" id="emailaddress"
                                                required="" placeholder="Alamat">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="password">Perihal</label>
                                            <input class="form-control" type="text" required=""
                                                id="password" placeholder="Perihal">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="password">Dokumen</label>
                                            <input class="form-control" type="file" required=""
                                                id="password" placeholder="Perihal">
                                        </div>

                                        

                                        <div class="form-group mt-5 text-center">
                                            <button class="btn waves-effect waves-light btn-rounded btn-outline-success" type="submit">Proses</button>
                                            <button class="btn waves-effect waves-light btn-rounded btn-outline-danger" data-bs-dismiss="modal">Kembali</button>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection

@section('css')
<script type="text/javascript" src="{{ asset('jquery-1.7.2.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#submit').submit(function(e){
            alert('ok')
        })
    });
</script>
@endsection