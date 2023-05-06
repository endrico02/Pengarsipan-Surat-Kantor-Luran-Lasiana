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


<form class="ps-3 pe-3" action="#">

    <div class="form-group mb-3">
        <label class="form-label" for="username">NIK</label>
        <input class="form-control" type="text" id="nik" name="nik"
            required="" placeholder="NIK">
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="username">Name</label>
        <input class="form-control" type="text" id="nama" name="nama"
            required="" placeholder="Nama Lengkap">
    </div>

    <div class="form-group mb-3">
        <label class="form-label" for="emailaddress">Alamat</label>
        <input class="form-control" type="text" id="alamat" name="alamat"
             placeholder="Alamat">
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="emailaddress">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="emailaddress">Tempat Lahir</label>
        <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir"
             placeholder="Tempat Lahir">
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="emailaddress">Tanggal Lahir</label>
        <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir"
             placeholder="Tanggal Lahir">
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="emailaddress">Pekerjaan</label>
        <input class="form-control" type="text" id="pekerjaan" name="pekerjaan"
             placeholder="Pekerjaan">
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
        <label class="form-label" for="password">Dokumen</label>
        <input class="form-control" type="file" 
            id="file" name="file" placeholder="Document">
    </div>

    

    <div class="form-group mt-5 text-center">
        <button class="btn waves-effect waves-light btn-rounded btn-outline-success" onclick="store()">Proses</button>
        <button class="btn waves-effect waves-light btn-rounded btn-outline-danger" data-bs-dismiss="modal">Kembali</button>
    </div>

</form>