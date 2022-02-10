<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Carbon\Carbon;

class XmlController extends Controller
{
    public function sitemap() {
        return response()->view('xml.sitemap')
            ->header('Content-Type', 'text/xml');
    }

    public function sitemapKategori($kategori) {
        $kategoriDetail = Kategori::where('kategori_slug',$kategori)
            ->first();

        if (!$kategoriDetail) {
            return abort(404);
        }

        $berita = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
            ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
            ->where('id_kategori',$kategoriDetail['id'])
            ->orderBy('tanggal', 'desc') 
            ->take(30000)
            ->get();

        return response()->view('xml.sitemap_kategori', [
            'posts' => $berita
        ])->header('Content-Type', 'text/xml');
    }
}
