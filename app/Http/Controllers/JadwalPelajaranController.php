<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\JadwalPelajaranImport;
use App\Exports\JadwalPelajaranExport;
use Maatwebsite\Excel\Facades\Excel;




class JadwalPelajaranController extends Controller
{
  public function
  jadwal_pelajaran()
  {
    // mengambil data dari table tb_agenda
    $jadwal_pelajaran = DB::table('jadwal_pelajaran')->get();

    // mengirim data tb_agenda ke view index
    return view('jadwal_pelajaran.jadwal_pelajaran', ['jadwal_pelajaran' => $jadwal_pelajaran]);
  }

  // method untuk menampilkan view form tambah tb_agenda
  // public function tambah()
  // {

  //   // memanggil view tambah
  //   return view('agenda.tambah');
  // }

  // method untuk insert data ke table tb_agenda
  public function store(Request $request)
  {
    // insert data ke table tb_agenda
    DB::table('jadwal_pelajaran')->insert([
      'nama' => $request->nama,
      'hari' => $request->hari
    ]);
    // alihkan halaman ke halaman agenda
    return redirect('/jadwal_pelajaran');
  }

  // method untuk edit data tb_agenda
  public function edit($id)
  {
    // mengambil data tb_agenda berdasarkan id yang dipilih
    $jadwal_pelajaran = DB::table('jadwal_pelajaran')->where('id', $id)->get();
    // passing data agenda yang didapat ke view edit.blade.php
    return view('jadwal_pelajaran.edit', ['jadwal_pelajaran' => $jadwal_pelajaran]);
  }

  // update data agenda
  public function update(Request $request)
  {
    // update data agenda
    DB::table('jadwal_pelajaran')->where('id', $request->id)->update([
      'nama' => $request->nama,
      'hari' => $request->hari
    ]);
    // alihkan halaman ke halaman agenda
    return redirect('/jadwal_pelajaran');
  }

  // method untuk hapus data agenda
  public function hapus($id)
  {
    // menghapus data agenda berdasarkan id yang dipilih
    DB::table('jadwal_pelajaran')->where('id', $id)->delete();

    // alihkan halaman ke halaman agenda
    return redirect('/jadwal_pelajaran');
  }
  
  public function import(Request $request){
    //melakukan import file
    Excel::import(new JadwalPelajaranImport, request()->file('file'));
    //jika berhasil kembali ke halaman sebelumnya
    return back();
}
public function export() 
{
    return Excel::download(new JadwalPelajaranExport, 'jadwal_pelajaran.xlsx');
    return back();
}

}
