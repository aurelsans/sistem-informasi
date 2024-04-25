<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiController extends Controller
{
    public function admin()
    {
        $prestasi = DB::table('achievements')->get();

        return view('/admin',['prestasi' =>$prestasi]);
    }
    // Halaman Depan
    public function indexsi()
    {
        $prestasi = DB::table('achievements')->get();

        return view('/indexsi',['prestasi' =>$prestasi]);
    }

    // Penelitian ===========================================================
    // Laboratorium
    public function laboratorium()
    {
        return view('/laboratorium');
    }
    // Laboratorium Komputer
    public function labkomp()
    {
        return view('/labkomp');
    }
    public function labkompa()
    {
        return view('/labkompa');
    }
    public function labkompb()
    {
        return view('/labkompb');
    }
    // Laboratorium Jaringan
    public function labjaringan()
    {
        return view('/labjaringan');
    }
    // Laboratorium Enterprise
    public function labenter()
    {
        return view('/labenter');
    }
    // Laboratorium IOT
    public function labiot()
    {
        return view('/labiot');
    }
    
    // ===========================================================
    // Kelompk Kerja Dosen
    public function kkdk()
    {
        return view('/kkdk');
    }

    // ===========================================================
    // Riset
    public function riset()
    {
        return view('/riset');
    }

    // Kemahasiswaan ===========================================================
    // Layanan
    public function layanan()
    {
        return view('/layanan');
    }

    // ===========================================================
    // Prestasi Mahasiswa
    public function prestasi()
    {
        return view('/prestasi');
    }
    // Prestasi MLBB
    public function prestasimlbb()
    {
        return view('/prestasimlbb');
    }

    // ===========================================================
    // Kehidupan Kampus
    public function kehidupank()
    {
        return view('/kehidupank');
    }

    // ===========================================================
    // Beasiswa
    public function beasiswa()
    {
        return view('/beasiswa');
    }

    // Kurikulum ===========================================================
    // CPL 
    public function cpl()
    {
        return view('/cpl');
    }

    // ===========================================================
    // Kurikulum
    public function kurikulum()
    {
        return view('/kurikulum');
    }

    // ===========================================================
    // Profesi
    public function profesi()
    {
        return view('/profesi');
    }

    // ===========================================================
    // Profil Lulusan
    public function profil()
    {
        return view('/profil');
    }

    // Tentang ===========================================================
    // Sambutan Kaprodi
    public function sambutan()
    {
        return view('/sambutan');
    }
    
    // ===========================================================
    // Prodi SI
    public function prodi()
    {
        return view('/prodi');
    }

    // ===========================================================
    // Staf Pengajar
    public function staf()
    {
        return view('/staf');
    }

    // ===========================================================
    // Manajamen
    public function manajemen()
    {
        return view('/manajemen');
    }

    // ===========================================================
    // Survey
    public function survey()
    {
        return view('/survey');
    }

    // ===========================================================
    // Kontak
    public function kontak()
    {
        return view('/kontak');
    }
}

