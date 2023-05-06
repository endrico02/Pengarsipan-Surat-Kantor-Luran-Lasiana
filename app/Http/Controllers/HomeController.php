<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\Arsip;
use Illuminate\Support\Facades\DB;
use PDF;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function data_tamu(){
        $data = Tamu::all();
        return view('data_tamu')->with([
            'data' => $data
        ]);
        // return view('data_tamu');
    }
    public function pengurusan_surat(){
        $data = Tamu::all();
        return view('pengurusan_surat')->with([
            'data' => $data
        ]);
    }
    public function pengarsipan_surat(){
        return view('pengarsipan_surat');
    }
    public function read(){

        $data = Tamu::all();
        return view('tampil_data_tamu')->with([
            'data' => $data
        ]);
    }
    public function data_tamu_create(){
        return view("modal_create_data_tamu");
    }
    public function data_tamu_store(Request $request){
        // $nama = $request->nama;
        // \DB::insert("INSERT INTO tamu (nama) VALUES ('$nama')");

        // $this->validate($request, [
        //     'nama'  => 'required',
        //     'nik'   => 'required'
        // ]);

        $tgl_db     = Tamu::max('tanggal');
        $tgl_now    = date('Y-m-d');
        $id         = Tamu::where('tanggal', $tgl_now)->max('no_antrian');
        
        if($tgl_db == '' || $tgl_db !== $tgl_now){
            $no = 1;
        }else{

            $no = $id + 1;
        }

        $this->validate($request, [
			'file' => 'required|mimes:pdf|max:2048',
		]);

        $file                   = $request->file('file');
        // $nama_file              = $file->getClientOriginalName();
        $nama_file              = $request->input('nik').'-'.$file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        // $file->move('document',$file->getClientOriginalName());
        $file->move('document',$nama_file);

        $insert = new Tamu;
        $insert->no_antrian     = $no;
        $insert->nik            = $request->input('nik');
        $insert->nama           = $request->input('nama');
        $insert->jenis_kelamin  = $request->input('jenis_kelamin');
        $insert->tempat_lahir   = $request->input('tempat_lahir');
        $insert->tanggal_lahir  = $request->input('tanggal_lahir');
        $insert->alamat         = $request->input('alamat');
        $insert->pekerjaan      = $request->input('pekerjaan');
        $insert->agama          = $request->input('agama');
        $insert->perihal        = $request->input('perihal');
        $insert->tanggal        = $tgl_now;
        $insert->opr_notif      = 2;
        $insert->document       = $nama_file;

        $insert->save();


        $notification = array(
            'message' => 'Berhasil Tambah Data',
            'alert-type' => 'success'
        );
        return back()->with($notification);    
    }

    public function lengkapi_data(Request $request, $id){
        $tgl_now1    = date('Y-m-d');
        // Update Data
        $insert = new Arsip;
        $insert->id_tamu            = $id;
        $insert->nama_usaha         = $request->input('usaha');
        $insert->alamat_usaha       = $request->input('alamat');
        $insert->jenis_keperluan    = $request->input('jenis_keperluan');
        $insert->tanggal_proses     = $tgl_now1;
        $insert->save();

        DB::table('tamu')->where('id_tamu', $id)->update([
            'opr_notif' => '3'
        ]);

        $notification = array(
            'message' => 'Berhasil Update Data',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function surat_keterangan_usaha($id){
        $data = DB::table('tamu')
                ->leftjoin('arsip', 'tamu.id_tamu', '=', 'arsip.id_tamu')
                ->where('tamu.id_tamu', $id)
                ->get();

        $pdf = PDF::loadView('surat_keterangan_usaha', compact('data'));
        $pdf->setPaper('A4', 'potraid');
        return $pdf->stream('Surat Keterangan Usaha.pdf');
    }
}
