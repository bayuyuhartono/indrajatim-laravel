<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\BannerSide;
use App\Models\BannerHome;
use Carbon\Carbon;

class BerandaController extends Controller
{
    function index()
    {
        $carouselnews = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('tbl_berita.hold',0)
            ->orderBy('tanggal', 'desc') 
            ->take(3)
            ->get();

        $infoterkini = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('id_kategori','4')
            ->where('tbl_berita.hold',0)
            ->orderBy('tanggal', 'desc') 
            ->take(5)
            ->get();
        
        $kabarjatim = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('id_kategori','6')
            ->where('tbl_berita.hold',0)
            ->orderBy('tanggal', 'desc') 
            ->take(6)
            ->get();
            
        $budaya = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('id_kategori','2')
            ->where('tbl_berita.hold',0)
            ->orderBy('tanggal', 'desc') 
            ->take(5)
            ->get();

        $sejarah = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('id_kategori','3')
            ->where('tbl_berita.hold',0)
            ->orderBy('tanggal', 'desc') 
            ->take(5)
            ->get();

        $bannerhorizontal = BannerHome::get();
        $bannervertical = BannerSide::get();

        $populer = $this->getPopuler();

        $res = view('home.index', [
            'carouselnews' => $carouselnews,
            'infoterkini' => $infoterkini,
            'kabarjatim' => $kabarjatim,
            'budaya' => $budaya,
            'sejarah' => $sejarah,
            'populer' => $populer,
            'bannerhorizontal' => $bannerhorizontal,
            'bannervertical' => $bannervertical
        ]);
        return $res;
    }

    function kategori_list($kategori)
    {
        $kategoriDetail = Kategori::where('kategori_slug',$kategori)
            ->first();

        if (!$kategoriDetail) {
            return abort(404);
        }

        $listBerita = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('id_kategori',$kategoriDetail['id'])
            ->where('tbl_berita.hold',0)
            ->orderBy('tanggal', 'desc') 
            ->paginate(12);

        $res = view('home.kategori', [
            'kategoriDetail' => $kategoriDetail,
            'listBerita' => $listBerita,
        ]);
        return $res;
    }

    public function cari(Request $request)
    {
        $q = $request->q;
        $listBeritaPencarian = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('judul', 'like', '%'.$q.'%')
            ->orderBy('tanggal', 'desc') 
            ->paginate(12);

        $res = view('home.pencarian', [
            'listBeritaPencarian' => $listBeritaPencarian,
            'q' => $q,
        ]);
        return $res;
    }

    public function getPopuler()
    {
        $populer = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('tanggal', '>=', Carbon::now()->subDays(14)->toDateTimeString())
            ->where('tbl_berita.hold',0)
            ->orderBy('count_hits', 'desc') 
            ->take(5)
            ->get();

        return $populer;
    }

    public function timkami()
    {
        return view('home.timkami');
    }
}
