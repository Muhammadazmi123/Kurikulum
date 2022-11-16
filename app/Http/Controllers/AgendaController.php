<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AgendaController extends Controller
{
  public function
  agenda()
  {
    // mengambil data dari table tb_agenda
    $tb_agenda = DB::table('tb_agenda')->get();

    // mengirim data tb_agenda ke view index
    return view('agenda.agenda', ['tb_agenda' => $tb_agenda]);
  }

  // method untuk menampilkan view form tambah tb_agenda
  public function tambah()
  {

    // memanggil view tambah
    return view('agenda.tambah');
  }

  // method untuk insert data ke table tb_agenda
  public function store(Request $request)
  {
    // insert data ke table tb_agenda
    DB::table('tb_agenda')->insert([
      'nama_kegiatan' => $request->nama_kegiatan,
      'implementasi_kurikulum' => $request->implementasi_kurikulum
    ]);
    // alihkan halaman ke halaman agenda
    return redirect('/agenda');
  }

  // method untuk edit data tb_agenda
  public function edit($id)
  {
    // mengambil data tb_agenda berdasarkan id yang dipilih
    $tb_agenda = DB::table('tb_agenda')->where('id', $id)->get();
    // passing data agenda yang didapat ke view edit.blade.php
    return view('agenda', ['tb_agenda' => $tb_agenda]);
  }

  // update data agenda
  public function update(Request $request)
  {
    // update data agenda
    DB::table('tb_agenda')->where('id', $request->id)->update([
      'nama_kegiatan' => $request->nama_kegiatan,
      'implementasi_kurikulum' => $request->implementasi_kurikulum
    ]);
    // alihkan halaman ke halaman agenda
    return redirect('/agenda');
  }

  // method untuk hapus data agenda
  public function hapus($id)
  {
    // menghapus data agenda berdasarkan id yang dipilih
    DB::table('tb_agenda')->where('id', $id)->delete();

    // alihkan halaman ke halaman agenda
    return redirect('/agenda');
  }
}
