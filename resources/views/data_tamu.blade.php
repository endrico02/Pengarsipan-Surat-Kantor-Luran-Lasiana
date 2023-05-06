@extends('home')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css') }}">
@endsection

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Tamu</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="home" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Data Tamu</li>
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
                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-success" data-bs-toggle="modal"
                    data-bs-target="#right-modal">Tambah Data Tamu</button>
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
                               </tr>
                                @endforeach
                            </tbody>
                        </table>
                       
                    </div>
                    <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-right">
                            <div class="modal-content">
                                <div class="modal-header">
                                    {{-- <h4 class="modal-title" id="myModalLabel">Tambah Data Tamu</h4> --}}
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-hidden="true"></button>
                                </div>
                                
                                <div class="modal-body">
                                    {{-- <div id="page"></div> --}}
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
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
                                    
                                    
                                    <form class="ps-3 pe-3" action="data_tamu/store" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="username">NIK</label>
                                            <input class="form-control" type="text" id="nik" name="nik"
                                                 placeholder="NIK" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="username">Name</label>
                                            <input class="form-control" type="text" id="nama" name="nama"
                                                 placeholder="Nama Lengkap" required>
                                        </div>
                                    
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="emailaddress">Alamat</label>
                                            <input class="form-control" type="text" id="alamat" name="alamat"
                                                 placeholder="Alamat" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="emailaddress">Jenis Kelamin</label>
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="emailaddress">Tempat Lahir</label>
                                            <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir"
                                                 placeholder="Tempat Lahir" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="emailaddress">Tanggal Lahir</label>
                                            <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir"
                                                 placeholder="Tanggal Lahir" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="emailaddress">Pekerjaan</label>
                                            <input class="form-control" type="text" id="pekerjaan" name="pekerjaan"
                                                 placeholder="Pekerjaan" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="emailaddress">Agama</label>
                                            <select class="form-control" id="agama" name="agama">
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Hindu">Hindu</option>
                                            </select>
                                        </div>
                                    
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="password">Perihal</label>
                                            <select class="form-control" id="perihal" name="perihal">
                                                <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                                <option value="Surat Domisili">Surat Domisili</option>
                                                <option value="Surat Pindah Keluar">Surat Pindah Keluar</option>
                                                <option value="Surat Pindah Masuk">Surat Pindah Masuk</option>
                                                <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                                                <option value="Surat Kelahiran">Surat Kelahiran</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="password">Dokumen</label><br>
                                            <label for="">Format yang di dukung : PDF</label>
                                            <input class="form-control" type="file" 
                                                id="file" name="file" placeholder="Document" required>
                                        </div>
                                    
                                        
                                    
                                        <div class="form-group mt-5 text-center">
                                            <button type="submit" class="btn waves-effect waves-light btn-rounded btn-outline-success">Proses</button>
                                            {{-- <button class="btn waves-effect waves-light btn-rounded btn-outline-success" onclick="store()">Proses</button> --}}
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
@endsection

{{-- @section('css')
<script type="text/javascript" src="{{ asset('jquery-1.7.2.min.js') }}"></script>
<script>
    $(document).ready(function(){
        read()
    });

    function read(){
        $.get("data_tamu/read", {}, function(data, status){
            $('#read').html(data);
        });
    }

    function create(){
        $.get("data_tamu/create", {}, function(data, status){
            $("#page").html(data);
            $("#right-modal").modal('show');
        });
    }


    function store(){
        var nik             = $("#nik").val();
        var nama            = $("#nama").val();
        var alamat          = $("#alamat").val();
        var jenis_kelamin   = $("#jenis_kelamin").val();
        var perihal         = $("#perihal").val();
        var tempat_lahir    = $("#tempat_lahir").val();
        var tanggal_lahir   = $("#tanggal_lahir").val();
        var pekerjaan       = $("#pekerjaan").val();
        var agama           = $("#agama").val();
        var file            = $("#file").val();
        var data            = "nik="+nik+"&nama="+nama+"&alamat="+alamat+"&perihal="+perihal+"&jenis_kelamin="+jenis_kelamin+"&tempat_lahir="+tempat_lahir+"&tanggal_lahir="+tanggal_lahir+"&pekerjaan="+pekerjaan+"&agama="+agama+"&file="+file;
        $.ajax({
            type        : "get",
            url         : "data_tamu/store",
            data        : data,
            contentType : "multipart/form-data",
            success:function(data){
            
                $(".btn-close").click();
                read();
            }
        });
    }
</script>
@endsection --}}