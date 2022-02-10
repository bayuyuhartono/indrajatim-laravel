<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Carbon\Carbon;

class RedirectController extends Controller
{
    function detail_old_url($kategori, $slug)
    {       
        $detailBerita = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('tbl_berita.slug',$slug)
            ->first();

        if (!$detailBerita) {
            return redirect(url('/'));
        }

        $generateUrl = url($detailBerita->kategori_slug.'/'.$slug,);

        return redirect($generateUrl);

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
