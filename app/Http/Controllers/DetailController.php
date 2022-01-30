<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Carbon\Carbon;

class DetailController extends Controller
{
    function detail($kategori, $slug)
    {
        $kategoriDetail = Kategori::where('slug',$kategori)
            ->first();
        
        $detailBerita = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('id_kategori',$kategoriDetail['id'])
            ->where('tbl_berita.slug',$slug)
            ->first();

        $tag = explode(",", $detailBerita->tag);

        $populer = $this->getPopuler();

        $res = view('detail.index', [
            'detailBerita' => $detailBerita,
            'tag' => $tag,
            'populer' => $populer,
        ]);
        return $res;
    }

    public function getPopuler()
    {
        $populer = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('tanggal', '>=', Carbon::now()->subDays(14)->toDateTimeString())
            ->orderBy('count_hits', 'desc') 
            ->take(5)
            ->get();

        return $populer;
    }
}
