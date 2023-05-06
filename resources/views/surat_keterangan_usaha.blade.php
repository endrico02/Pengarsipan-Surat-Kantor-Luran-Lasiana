<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<table align="center">
    <td> <center><img src="{{ ('logos.jpg') }}" width="120" height="100"></center> </td>
    <td>
        <center>
            <font size="4"><b>PEMERINTAH KOTA KUPANG</b></font><br>
            <font size="4"><b>KECAMATAN KELAPA LIMA</b></font><br>
            <font size="4"><b>KELURAHAN LASIANA</b></font><br>
            <font size="2"><b>JALAN TIMOR RAYA KM. 11 LASIANA KOTA KUPANG TELP. (0380) 881921</b></font><br>
            <font size="2"><b>Website WWW.KupangKota.go.id</b></font><br>
        </center>
    </td>
</table>
<hr>
@foreach ($data as $item)
<table align="center">
    <tr>
        <td>
            <b><u>SURAT KETERANGAN USAHA</u></b><br>
            Nomor : Kel.Lsn. 511.3/ /III/2023
        </td>
    </tr>
</table>
<br>
<br>
<table>
    <tr>
        <td>Yang bertanda tangan dibawah ini :</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td width="340">: <b>WELLEM BENTURA, SH</b></td>
    </tr>
    <tr>
        <td>NIP</td>
        <td width="340">: 19660214 198903 1 010</td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td width="340">: <b>Lurah Lasiana</b></td>
    </tr>
</table>
<br>
<table>
    <tr>
        <td>Menerangkan dengan sebenar - benarnya bahwa :</td>
    </tr>
</table>
<table>
    <tr>
        <td width="168">Nama</td>
        <td width="340">: {{ $item->nama }}</td>
    </tr>
    <tr>
        <td width="168">Jenis Kelamin</td>
        <td width="340">: {{ $item->jenis_kelamin }}</td>
    </tr>
    <tr>
        <td width="168">Tempat/Tgl Lahir</td>
        <td width="340">: {{ $item->tempat_lahir }}, {{ date('d-m-Y', strtotime($item->tanggal_lahir)) }}</td>
    </tr>
    <tr>
        <td width="168">Kewarganegaraan</td>
        <td width="340">: WNI</td>
    </tr>
    <tr>
        <td width="168">Pekerjaan</td>
        <td width="340">: {{ $item->pekerjaan }}</td>
    </tr>
    <tr>
        <td width="168">Agama</td>
        <td width="340">: {{ $item->agama }}</td>
    </tr>
    <tr>
        <td width="168">NIK</td>
        <td width="340">: {{ $item->nik }}</td>
    </tr>
    <tr>
        <td width="168">Alamat</td>
        <td width="340">: {{ $item->alamat }}</td>
    </tr>
</table>
<br>
<p style="text-align: justify; text-indent: 1in;">Bersangkutan tersebut diatas benar - benar memiliki <b>Usaha : {{ $item->nama_usaha }}</b> di {{ $item->alamat_usaha }}.</p>
<p style="text-align: justify; text-indent: 1in;">Surat keterangan ini diberikan kepada yang bersangkutan untuk melengkapi persyaratan {{ $item->jenis_keperluan }}</p>
<p style="text-align: justify; text-indent: 1in;">Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
<br>
<table align="right">
    <tr>
        <?php $tgl_now1    = date('d F Y'); ?>
        <td width="150">Kupang, {{ $tgl_now1 }}</td>
    </tr>
    <tr>
        <td><center><b>Lurah Lasiana</b></center></td>
    </tr>
    <br>
    <br>
    <br>
    <br>
    <tr>
        <td><b><u>WELLEM BENTURA, SH</u></b></td>
    </tr>
    <tr>
        <td>NIP : 19660214 198903 1 010</td>
    </tr>
</table>
@endforeach
<body>
    
</body>
</html>