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
          'detail_prestasi' => $request->detail_prestasi,
          'created_at' => now(),
          
      ]);

      return redirect('/admin');
  
    }

    //------function edit prestasi-------
    public function editprestasi($id)
    {
      
        $edit = DB::table('achievements')->where('id',$id)->get();
      
        return view('/editprestasi',['edit' =>$edit]);
   
    }
    public function updateprestasi(Request $request)
    {
        $tujuan = 'foto_prestasi';

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('gambar_prestasi')) {
            $gambar = $request->file('gambar_prestasi');
            $gambar->move($tujuan, $gambar->getClientOriginalName());
            $gambar_prestasi = $gambar->getClientOriginalName();
        } else {
            // Jika tidak ada file gambar yang diunggah, gunakan gambar yang sudah ada
            $gambar_prestasi = $request->gambar_prestasi_existing;
        }

        DB::table('achievements')->where('id', $request->id)->update([
            'gambar_prestasi' =>  $gambar_prestasi,
            'judul_prestasi' => $request->judul_prestasi,
            'deskripsi_prestasi' => $request->deskripsi_prestasi,
            'detail_prestasi' => $request->detail_prestasi,
        ]);

        return redirect('/prestasiadmin');
    }

    //------function tambah cpl-------
    public function tambahcapaian()
    {
        return view('/tambahcapaian');
    }
   

    public function simpancapaian(Request $request)
    {

      DB::table('capaian')->insert([
          'judul_capaian' => $request->judul_capaian,
      ]);

      return redirect('/cpladmin');
    }

     //------function hapus cpl-------
     public function hapuscapaian($id)
     {
     
       DB::table('capaian')->where('id',$id)->delete();
       
       return redirect('/cpladmin');
     }

    //------function tambah deskripsi cpl-------
    public function tambahdeskripsi()
    {
    // Ambil data capaian dari database menggunakan Query Builder
    $capaians = DB::table('capaian')->get(); // Misalnya, mengambil semua data capaian

    // Kirim data capaian ke view '/tambahdeskripsi'
    return view('/tambahdeskripsi', ['capaians' => $capaians]);
    }

    public function simpandeskripsi(Request $request) {
      $validatedData = $request->validate([
          'capaian_id' => 'required|exists:capaian,id',
          'deskripsi_capaian' => 'required|string',
      ]);
  
      // Masukkan data ke dalam tabel deskripsi_capaian menggunakan query builder
      DB::table('deskripsi_capaian')->insert([
          'capaian_id' => $validatedData['capaian_id'],
          'deskripsi' => $validatedData['deskripsi_capaian'],
      ]);
  
      return redirect('/cpladmin')->with('success', 'Deskripsi berhasil disimpan.');
      }

      //------function edit deskripsi cpl-------
      public function editdeskripsi($id)
      {
        $editdesk = DB::table('deskripsi_capaian')->where('id',$id)->get();
      
        return view('/editdeskripsi',['editdesk' => $editdesk]);
      }

      public function updatedeskripsi(Request $request){

        DB::table('deskripsi_capaian')->where('id' ,$request->id)->update([
          'capaian_id' => $request->capaian_id,
          'deskripsi' => $request->deskripsi,
        ]);
       
        return redirect('/cpladmin');

      }


      //------function hapus deskripsi cpl-------
      public function deletedeskripsi($id){
   
        DB::table('deskripsi_capaian')->where('id',$id)->delete();
       
        return redirect('/cpladmin');

      }


      //------function tambah profesi-------
      public function tambahprofesi()
    {
        return view('/tambahprofesi');
    }

    public function simpanprofesi(Request $request)
    {

      DB::table('profesi')->insert([
          'nama_profesi' => $request->nama_profesi,
          'deskripsi_profesi' => $request->deskripsi_profesi,
      ]);

      return redirect('/profesiadmin');
    }


    //------function edit profesi-------
    public function editprofesi($id)
    {
      
        $editpro = DB::table('profesi')->where('id',$id)->get();
      
        return view('/editprofesi',['editpro' =>$editpro]);
   
    }

    public function updateprofesi(Request $request)
    {
      DB::table('profesi')->where('id' ,$request->id)->update([
        'nama_profesi' => $request->nama_profesi,
        'deskripsi_profesi' => $request->deskripsi_profesi,
      ]);
  
      return redirect('/profesiadmin');
  
    }


    //--------------function hapus profesi-----------
    public function hapusprofesi($id){
   
      DB::table('profesi')->where('id',$id)->delete();
     
      return redirect('/profesiadmin');

    }
    //--------------function tambah laboratorium----------
    public function tambahlaboratorium()
    {
        return view('/tambahlaboratorium');
    }
   

    public function simpanlaboratorium(Request $request)
    {

      DB::table('laboratorium')->insert([
          'ruangan' => $request->ruangan,
      ]);

      return redirect('/spekadmin');
    }

    //--------------function tambah spesifikasi-----------
    public function tambahspesifikasi()
    {
    // Ambil data spek dari database menggunakan Query Builder
    $spesifikasi = DB::table('laboratorium')->get(); 

    // Kirim data spek ke view '/tambahspesifikasi'
    return view('/tambahspesifikasi', ['spesifikasi' => $spesifikasi]);
    }


    public function simpanspesifikasi(Request $request) {
      $validatedData = $request->validate([
          'lab_id' => 'required|exists:laboratorium,id',
          'nama_spek' => 'required|string',
          'detail_spek' => 'required|string',
      ]);
  
      // Masukkan data ke dalam tabel deskripsi_capaian menggunakan query builder
      DB::table('spesifikasi')->insert([
          'lab_id' => $validatedData['lab_id'],
          'nama_spek' => $validatedData['nama_spek'],
          'detail_spek' => $validatedData['detail_spek'],
      ]);
      
      return redirect('/spekadmin')->with('success', 'Deskripsi berhasil disimpan.');
      }


      //----------------------- function edit spesifikasi -----------------------------
      
      public function editspesifikasi($id)
    {
      
        $editspes = DB::table('spesifikasi')->where('id',$id)->get();
      
        return view('/editspesifikasi',['editspes' =>$editspes]);
   
    }

    public function updatespesifikasi(Request $request)
    {
      DB::table('spesifikasi')->where('id' ,$request->id)->update([
        'nama_spek' => $request->nama_spek,
        'detail_spek' => $request->detail_spek,
      ]);
  
      return redirect('/spekadmin');
  
    }


     //----------------------- function hapus spesifikasi -----------------------------
     public function hapusspesifikasi($id){
   
      DB::table('spesifikasi')->where('id',$id)->delete();
     
      return redirect('/spekadmin');

    }


      //--------------function tambah fasilitas-----------
    public function tambahfasilitas()
    {
    // Ambil data spek dari database menggunakan Query Builder
    $fasilitas = DB::table('laboratorium')->get(); 

    // Kirim data spek ke view '/tambahspesifikasi'
    return view('/tambahfasilitas', ['fasilitas' => $fasilitas]);
    }


    public function simpanfasilitas(Request $request) {
      $validatedData = $request->validate([
          'lab_id' => 'required|exists:laboratorium,id',
          'nama_fasil' => 'required|string',
          'detail_fasil' => 'required|string',
      ]);
  
      // Masukkan data ke dalam tabel deskripsi_capaian menggunakan query builder
      DB::table('fasilitas')->insert([
          'lab_id' => $validatedData['lab_id'],
          'nama_fasil' => $validatedData['nama_fasil'],
          'detail_fasil' => $validatedData['detail_fasil'],
      ]);
      
      return redirect('/fasilitasadmin')->with('success', 'Deskripsi berhasil disimpan.');
      }


       //----------------------- function edit spesifikasi -----------------------------
      
       public function editfasilitas($id)
       {
         
           $editfa = DB::table('fasilitas')->where('id',$id)->get();
         
           return view('/editfasilitas',['editfa' =>$editfa]);
      
       }
   
       public function updatefasilitas(Request $request)
       {
         DB::table('fasilitas')->where('id' ,$request->id)->update([
           'nama_fasil' => $request->nama_fasil,
           'detail_fasil' => $request->detail_fasil,
         ]);
     
         return redirect('/fasilitasadmin');
     
       }
   
   
        //----------------------- function hapus spesifikasi -----------------------------
        public function hapusfasilitas($id){
      
         DB::table('fasilitas')->where('id',$id)->delete();
        
         return redirect('/fasilitasadmin');
   
       }


       //-------------------------function khusus laboratorium jaringan(Router)----------------
        //------function tambah router-------
        public function tambahrouter()
        {
            return view('/tambahrouter');
        }
      

        public function simpanrouter(Request $request)
        {

          DB::table('router')->insert([
              'merek' => $request->merek,
          ]);

          return redirect('/routeradmin');
        }


        //--------function tambah detail router-------

        public function tambahdetail()
        {
        // Ambil data router dari database menggunakan Query Builder
        $router = DB::table('router')->get(); // Misalnya, mengambil semua data capaian
    
        // Kirim data capaian ke view '/tambahdeskripsi'
        return view('/tambahdetail', ['router' => $router]);
        }
    
        public function simpandetail(Request $request) {
          $validatedData = $request->validate([
              'router_id' => 'required|exists:router,id',
              'router_spek' => 'required|string',
              'router_detail' => 'required|string',
          ]);
      
          // Masukkan data ke dalam tabel detail_router menggunakan query builder
          DB::table('detail_router')->insert([
              'router_id' => $validatedData['router_id'],
              'router_spek' => $validatedData['router_spek'],
              'router_detail' => $validatedData['router_detail'],
          ]);
      
          return redirect('/routeradmin')->with('success', 'Detail berhasil disimpan.');
          }
          //-----------------------------------------
          public function hapusrouter($id)
          {
          
            DB::table('router')->where('id',$id)->delete();
            
            return redirect('/routeradmin');
          }

          //------function edit detail router-------
          public function editdetail($id)
          {
            $editdet = DB::table('detail_router')->where('id',$id)->get();
          
            return view('/editdetail',['editdet' => $editdet]);
          }

          public function updatedetail(Request $request){

            DB::table('detail_router')->where('id' ,$request->id)->update([
              'router_id' => $request->router_id,
              'router_spek' => $request->router_spek,
              'router_detail' => $request->router_detail,
            ]);
          
            return redirect('/routeradmin');

          }


          //------function hapus deskripsi cpl-------
          public function deletedetail($id){
      
            DB::table('detail_router')->where('id',$id)->delete();
          
            return redirect('/routeradmin');

          }

}
