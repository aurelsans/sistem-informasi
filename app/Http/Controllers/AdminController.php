<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //------function tambah------
    public function tambahprestasi()
    {
        return view('/tambahprestasi');
    }
    
    //------function simpan-------
    public function simpanprestasi(Request $request)
    {

      $gambar = $request->file('gambar_prestasi');
      $tujuan = 'foto_prestasi';

      $gambar->move($tujuan,$gambar->getClientOriginalName());

      DB::table('achievements')->insert([
          'gambar_prestasi' => $gambar->getClientOriginalName(),
          'judul_prestasi' => $request->judul_prestasi,
          'deskripsi_prestasi' => $request->deskripsi_prestasi,
          
      ]);

      return redirect('/admin');
  
    }

    //------function edit-------
    public function editprestasi($id)
    {
      
        $edit = DB::table('achievements')->where('id',$id)->get();
      
        return view('/editprestasi',['edit' =>$edit]);
   
    }
    public function updateprestasi(Request $request)
    {
        $gambar = $request->file('gambar_prestasi');
        $tujuan = 'foto_prestasi';
  
        $gambar->move($tujuan,$gambar->getClientOriginalName());

      DB::table('achievements')->where('id' ,$request->id)->update([
        'gambar_prestasi' =>  $gambar->getClientOriginalName(),
        'judul_prestasi' => $request->judul_prestasi,
        'deskripsi_prestasi' => $request->deskripsi_prestasi,
      ]);
     
      return redirect('/admin');
  
    }



}
