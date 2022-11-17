<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JadwalKelas10Controller extends Controller
{
  public function jadwal()
  {
     // mengambil data dari table tb_jadwal
     $tb_jadwal = DB::table('tb_jadwal')->get();

     // mengirim data tb_jadwal ke view index
     return view('jadwal.kelas-10', ['tb_jadwal' => $tb_jadwal]);
  }

  // method untuk menampilkan view form tambah tb_jadwal
  // public function tambah()
  // {

  //   // memanggil view tambah
  //   return view('jadwal.tambah');
  // }

  // method untuk insert data ke table tb_jadwal
  public function store(Request $request)
  {
    // insert data ke table tb_jadwal
    DB::table('tb_jadwal')->insert([
      'nama' => $request->nama,
      'jk' => $request->jk,
      'jam' => $request->jam,
      'mapel' => $request->mapel
    ]);
    // alihkan halaman ke halaman jadwal
    return redirect('/jadwal/kelas-10');
  }

  // method untuk edit data tb_jadwal
  public function edit($id)
  {
    // mengambil data tb_jadwal berdasarkan id yang dipilih
    $tb_jadwal = DB::table('tb_jadwal')->where('id', $id)->get();
    // passing data jadwal yang didapat ke view edit.blade.php
    return view('jadwal.kelas-10Edit', ['tb_jadwal' => $tb_jadwal]);
  }

  // update data jadwal
  public function update(Request $request)
  {
    // update data jadwal
    DB::table('tb_jadwal')->where('id', $request->id)->update([
      'nama' => $request->nama,
      'jk' => $request->jk,
      'jam' => $request->jam,
      'mapel' => $request->mapel
    ]);
    // alihkan halaman ke halaman jadwal
    return redirect('/jadwal/kelas-10');
  }

  // method untuk hapus data jadwal
  public function hapus($id)
  {
    // menghapus data jadwal berdasarkan id yang dipilih
    DB::table('tb_jadwal')->where('id', $id)->delete();

    // alihkan halaman ke halaman jadwal
    return redirect('/jadwal/kelas-10');
  }
}
