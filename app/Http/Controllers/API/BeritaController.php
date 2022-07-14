<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function kategori()
    {
        $kategori = Kategori::get();
        foreach ($kategori as $key => $value) {
            $value->link = url('/') . '/api/list?page=1&category=' . $value->kategori_slug;
        }

        return $kategori;
    }

    public function listBerita(Request $request)
    {
        $category = $request->input('category') ? $request->input('category') : '-';
        if ($category !== '-') {
            $berita = Berita::select(
                'tbl_berita.id_berita',
                'tbl_berita.slug',
                'tbl_berita.gambar',
                'tbl_berita.judul',
                'tbl_berita.caption',
                'tbl_berita.tag',
                'tbl_berita.tanggal',
                'tbl_kategori.kategori'
            )
                ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
                ->where('tbl_berita.hold', 0)
                ->where('tbl_kategori.kategori_slug', $category)
                ->orderBy('tanggal', 'desc')
                ->paginate(12);
        } else {
            $berita = Berita::select(
                'tbl_berita.id_berita',
                'tbl_berita.slug',
                'tbl_berita.gambar',
                'tbl_berita.judul',
                'tbl_berita.caption',
                'tbl_berita.tag',
                'tbl_berita.tanggal',
                'tbl_kategori.kategori'
            )
                ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
                ->where('tbl_berita.hold', 0)
                ->orderBy('tanggal', 'desc')
                ->paginate(12);
        }

        foreach ($berita as $key => $value) {
            $value->gambar = url('/') . '/assets/admin/upload/berita/' . $value->gambar;
        }

        return $berita;
    }

    public function detailBerita(Request $request)
    {
        $slug = $request->input('slug') ? $request->input('slug') : '-';
        $detailBerita = Berita::select(
            'tbl_berita.id_berita',
            'tbl_berita.slug',
            'tbl_berita.gambar',
            'tbl_berita.judul',
            'tbl_berita.caption',
            'tbl_berita.tag',
            'tbl_berita.tanggal',
            'tbl_kategori.kategori',
            'tbl_berita.content',
        )
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('tbl_berita.hold', 0)
            ->where('tbl_berita.slug', $slug)
            ->first();

            return $detailBerita;
    }

    function headBerita()
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
}
