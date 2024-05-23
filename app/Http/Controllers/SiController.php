<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiController extends Controller
{

    protected $pages;

    public function __construct()
    {
        // Definisikan halaman dengan route yang sesuai
        $this->pages = [
            ['title' => 'Beranda', 'route' => 'indexsi', 'keywords' => ['home', 'main']],
            ['title' => 'Laboratorium', 'route' => 'laboratorium', 'keywords' => ['lab', 'research']],
            ['title' => 'Laboratorium Komputer', 'route' => 'labkomp', 'keywords' => ['computer lab', 'computing']],
            ['title' => 'Laboratorium Komputer A', 'route' => 'labkompa', 'keywords' => ['lab A', 'computer A']],
            ['title' => 'Laboratorium Komputer B', 'route' => 'labkompb', 'keywords' => ['lab B', 'computer B']],
            ['title' => 'Laboratorium Jaringan', 'route' => 'labjaringan', 'keywords' => ['network lab', 'networking']],
            ['title' => 'Laboratorium Enter', 'route' => 'labenter', 'keywords' => ['enterprise lab', 'enterprise']],
            ['title' => 'Laboratorium IoT', 'route' => 'labiot', 'keywords' => ['iot lab', 'internet of things']],
            ['title' => 'KKDK', 'route' => 'kkdk', 'keywords' => ['kkdk', 'research group']],
            ['title' => 'Riset', 'route' => 'riset', 'keywords' => ['research', 'study']],
            ['title' => 'Layanan Mahasiswa', 'route' => 'layanan', 'keywords' => ['student services', 'services']],
            ['title' => 'Prestasi Mahasiswa', 'route' => 'prestasi', 'keywords' => ['student achievements', 'achievements']],
            ['title' => 'Prestasi MLBB', 'route' => 'prestasimlbb', 'keywords' => ['mlbb achievements', 'mobile legends']],
            ['title' => 'Kehidupan Kampus', 'route' => 'kehidupank', 'keywords' => ['campus life', 'life']],
            ['title' => 'Beasiswa', 'route' => 'beasiswa', 'keywords' => ['scholarship', 'scholarships']],
            ['title' => 'CPL', 'route' => 'cpl', 'keywords' => ['cpl', 'learning outcomes']],
            ['title' => 'Kurikulum', 'route' => 'kurikulum', 'keywords' => ['curriculum', 'course']],
            ['title' => 'Profesi', 'route' => 'profesi', 'keywords' => ['profession', 'career']],
            ['title' => 'Profil Lulusan', 'route' => 'profil', 'keywords' => ['graduate profile', 'profile']],
            ['title' => 'Sambutan Kaprodi', 'route' => 'sambutan', 'keywords' => ['head welcome', 'welcome']],
            ['title' => 'Prodi SI', 'route' => 'prodi', 'keywords' => ['study program', 'si program']],
            ['title' => 'Staf Pengajar', 'route' => 'staf', 'keywords' => ['teaching staff', 'staff']],
            ['title' => 'Manajemen', 'route' => 'manajemen', 'keywords' => ['management', 'admin']],
            ['title' => 'Survey', 'route' => 'survey', 'keywords' => ['survey', 'poll']],
            ['title' => 'Kontak', 'route' => 'kontak', 'keywords' => ['contact', 'get in touch']]
        ];
    }

    public function admin()
    {           
        return view('admin');
    }

    // Halaman Depan
    public function indexsi()
    {
        // Ambil tiga baris data terbaru dari tabel achievements
        $prestasi = DB::table('achievements')->latest()->take(3)->get();

        // Kirim data tersebut ke view
        return view('indexsi', ['prestasi' => $prestasi]);
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
         // Mengambil data dari tabel capaian
         $capaian = DB::table('capaian')->get();
    
         // Mengambil data dari tabel deskripsi_capaian yang terkait dengan capaian
         $deskripsiCapaian = DB::table('deskripsi_capaian')
                             ->join('capaian', 'deskripsi_capaian.capaian_id', '=', 'capaian.id')
                             ->select('deskripsi_capaian.*', 'capaian.judul_capaian')
                             ->get();
 
        return view('cpl', compact('capaian', 'deskripsiCapaian'));
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
        $profesi = DB::table('profesi')->get();
        return view('profesi',compact('profesi'));
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

    public function prestasiadmin()
    {
        $prestasi = DB::table('achievements')->get();
        return view('prestasiadmin', compact('prestasi'));
    }

    public function cpladmin()
    {
         // Mengambil data dari tabel capaian
         $capaian = DB::table('capaian')->get();
    
         // Mengambil data dari tabel deskripsi_capaian yang terkait dengan capaian
         $deskripsiCapaian = DB::table('deskripsi_capaian')
                             ->join('capaian', 'deskripsi_capaian.capaian_id', '=', 'capaian.id')
                             ->select('deskripsi_capaian.*', 'capaian.judul_capaian')
                             ->get();
 
        return view('cpladmin', compact('capaian', 'deskripsiCapaian'));
    }

    public function profesiadmin()
    {
        $profesi = DB::table('profesi')->get();
        return view('profesiadmin',compact('profesi'));
    }
    public function spekadmin()
    {
        $spesifikasi = DB::table('laboratorium')
                        ->join('spesifikasi', 'laboratorium.id', '=', 'spesifikasi.lab_id')
                        ->select('laboratorium.id', 'laboratorium.ruangan', 'spesifikasi.id as spesifikasi_id', 'spesifikasi.nama_spek', 'spesifikasi.detail_spek')
                        ->orderBy('spesifikasi.id')
                        ->get();
            return view('/spekadmin', compact('spesifikasi'));
    }
    public function fasilitasadmin()
    {
        $fasilitas = DB::table('laboratorium')
                        ->join('fasilitas', 'laboratorium.id', '=', 'fasilitas.lab_id')
                        ->select('laboratorium.id', 'laboratorium.ruangan', 'fasilitas.id as fasilitas_id', 'fasilitas.nama_fasil', 'fasilitas.detail_fasil')
                        ->orderBy('fasilitas.id')
                        ->get();
        return view('/fasilitasadmin', compact('fasilitas'));
    }
    public function routeradmin()
    {
        $router = DB::table('router')->get();

        $detailRouter = DB::table('detail_router')
                            ->join('router', 'detail_router.router_id', '=', 'router.id')
                            ->select('detail_router.*', 'router.merek')
                            ->get();

        return view('/routeradmin', compact('router', 'detailRouter'));
    }
    //-------------------------------------------------------------------------------------------------------------
    //                                          KHUSUS VIEW SELURUH LABORATORIUM
    //-------------------------------------------------------------------------------------------------------------

    public function showLaboratoriumA()
    {
        $data = $this->getDataByRuangan('Laboratorium Komputer A');
        return view('labkompa', compact('data'));
    }

    public function showLaboratoriumB()
    {
        $data = $this->getDataByRuangan('Laboratorium Komputer B');
        return view('labkompb', compact('data'));
    }

    public function showLaboratoriumC()
    {
        $data = $this->getDataByRuangan('Laboratorium Jaringan');
        $data2 = $this->getDataByRouter();
        return view('labjaringan', compact('data', 'data2'));
    }

    public function showLaboratoriumD()
    {
        $data = $this->getDataByRuangan('Laboratorium Enterprise');
        return view('labenter', compact('data'));
    }

    public function showLaboratoriumE()
    {
        $data = $this->getDataByRuangan('Laboratorium IOT');
        return view('labiot', compact('data'));
    }

    private function getDataByRuangan($ruangan)
    {
        // Ambil data spesifikasi untuk ruangan tertentu
        $spesifikasi = DB::table('spesifikasi')
                        ->join('laboratorium', 'spesifikasi.lab_id', '=', 'laboratorium.id')
                        ->select('spesifikasi.nama_spek', 'spesifikasi.detail_spek')
                        ->where('laboratorium.ruangan', $ruangan)
                        ->get();

        // Ambil data fasilitas untuk ruangan tertentu
        $fasilitas = DB::table('fasilitas')
                    ->join('laboratorium', 'fasilitas.lab_id', '=', 'laboratorium.id')
                    ->select('fasilitas.nama_fasil', 'fasilitas.detail_fasil')
                    ->where('laboratorium.ruangan', $ruangan)
                    ->get();

        // Set data spesifikasi dan fasilitas ke dalam array $data
        $data['spesifikasi'] = $spesifikasi->toArray();
        $data['fasilitas'] = $fasilitas->toArray();
        
        return $data;
    }

    private function getDataByRouter(){

        $router = DB::table('router')->get();

        $detail_router = DB::table('detail_router')
                            ->join('router', 'detail_router.router_id', '=', 'router.id')
                            ->select('detail_router.*', 'router.merek')
                            ->get();

        $data2['router'] = $router->toArray();
        $data2['detail_router'] = $detail_router->toArray();
        return $data2;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $page = collect($this->pages)->first(function ($page) use ($query) {
            return stripos($page['title'], $query) !== false || collect($page['keywords'])->contains(function ($keyword) use ($query) {
                return stripos($keyword, $query) !== false;
            });
        });

        if ($page) {
            return redirect()->route($page['route']);
        } else {
            return redirect()->route('indexsi')->with('error', 'Halaman tidak ditemukan.');
        }
    }
}

