<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerHome;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function bannerMain()
    {
        return view('admin.banner.main');
    }

    public function bannerSide()
    {
        return view('admin.banner.side');
    }

    public function bannerMainStore(Request $request)
    {
        $gambarAtasName = '';
        $gambarBawahName = '';

        if ($request->hasFile('gambar-atas')) {
            $gambarAtas = $request->file('gambar-atas');
            $gambarAtasName = 'ijtbanner-' . rand(1000, 9999) .'.'. $gambarAtas->getClientOriginalExtension();
            $gambarAtas->move('assets/admin/upload/banner/', $gambarAtasName);

            $berita = BannerHome::where('position', 'atas')
            ->update([
                'link' => $request->linkAtas,
                'image' => $gambarAtasName,
            ]);
        }

        if ($request->hasFile('gambar-bawah')) {
            $gambarBawah = $request->file('gambar-bawah');
            $gambarBawahName = 'ijtbanner-' . rand(1000, 9999) .'.'. $gambarBawah->getClientOriginalExtension();
            $gambarBawah->move('assets/admin/upload/banner/', $gambarBawahName);

            $berita = BannerHome::where('position', 'bawah')
            ->update([
                'link' => $request->linkBawah,
                'image' => $gambarBawahName,
            ]);
        }

        return redirect('admin/banner-main')->with('success', 'Ubah Data Berhasil');
    }
}
