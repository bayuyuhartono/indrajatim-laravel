<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\BannerSide;
use App\Models\BannerHome;
use Carbon\Carbon;

class DetailController extends Controller
{
    function detail($kategori, $slug)
    {
        $kategoriDetail = Kategori::where('kategori_slug',$kategori)
            ->first();
        
        $detailBerita = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('id_kategori',$kategoriDetail['id'])
            ->where('tbl_berita.slug',$slug)
            ->first();

        if (!$detailBerita) {
            return abort(404);
        }

        $increase = intval($detailBerita['count_hits']) + 1;

        Berita::where('id_berita',$detailBerita['id_berita'])
            ->update(['count_hits' => $increase]);

        $tag = explode(",", $detailBerita->tag);

        $populer = $this->getPopuler();

        $bannerhorizontal = BannerHome::get();
        $bannervertical = BannerSide::get();

        $res = view('detail.index', [
            'detailBerita' => $detailBerita,
            'tag' => $tag,
            'populer' => $populer,
            'bannerhorizontal' => $bannerhorizontal,
            'bannervertical' => $bannervertical
        ]);
        return $res;
    }

    public function getPopuler()
    {
        $populer = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('tanggal', '>=', Carbon::now()->subDays(14)->toDateTimeString())
            ->orderBy('count_hits', 'desc') 
            ->take(5)
            ->get();

        return $populer;
    }
}
