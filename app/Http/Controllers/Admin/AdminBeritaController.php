<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Tag;
use Carbon\Carbon;

class AdminBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();

        return view('admin.berita.create', [
            'kategori' => $kategori,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'post_title' => 'required',
        //     'category' => 'required',
        // ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = substr($request->slug, 0, 10). '-ijt' . rand(10, 99) . $gambar->getClientOriginalExtension();
            $gambar->move('assets/admin/upload/berita/', $gambarName);
        }

        $tag = "";
        foreach ($request->tag as $key => $value) {
            $checkTag = $this->checkTag($value);
            if ($key !== 0) {
                $tag .= ',';
            }
            $tag .= strtolower($value);
        }

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->slug = $request->slug;
        $berita->gambar = $gambarName;
        $berita->judul_gambar = $request->judulgambar;
        $berita->id_kategori = $request->kategori;
        $berita->tanggal = Carbon::parse($request->tanggal);
        $berita->tag = $tag;
        $berita->caption = $request->caption;
        $berita->content = $request->content;
        $berita->tanggal_dibuat = Carbon::now();
        $berita->tanggal_diubah = Carbon::now();
        $berita->save();
        return redirect('admin/berita')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::where('id_berita', $id)->first();
        $tagexplode = explode(',', $berita['tag']);
        $kategori = Kategori::get();
        return view('admin.berita.edit', [
                'berita' => $berita,
                'kategori' => $kategori,
                'tagexplode' => $tagexplode
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tag = "";
        foreach ($request->tag as $key => $value) {
            $checkTag = $this->checkTag($value);
            if ($key !== 0) {
                $tag .= ',';
            }
            $tag .= strtolower($value);
        }

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = substr($request->slug, 0, 10). '-ijt' . rand(10, 99) . $gambar->getClientOriginalExtension();
            $gambar->move('assets/admin/upload/berita/', $gambarName);

            $berita = Berita::where('id_berita', $id)
            ->update([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'gambar' => $gambarName,
                'judul_gambar' => $request->judulgambar,
                'id_kategori' => $request->kategori,
                'tanggal' => Carbon::parse($request->tanggal),
                'tag' => $tag,
                'caption' => $request->caption,
                'content' => $request->content,
                'tanggal_diubah' => Carbon::now(),
            ]);
        } else {
            $berita = Berita::where('id_berita', $id)
            ->update([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'judul_gambar' => $request->judulgambar,
                'id_kategori' => $request->kategori,
                'tanggal' => Carbon::parse($request->tanggal),
                'tag' => $tag,
                'caption' => $request->caption,
                'content' => $request->content,
                'tanggal_diubah' => Carbon::now(),
            ]);
        }     
        
        return redirect('admin/berita')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Berita::where('id_berita',$id);
        $post->delete();

        return back()->with('success',' Penghapusan berhasil.');
    }

    public function getBerita(Request $request)
    {
        if ($request->ajax()) {
            $data = Berita::select('tbl_berita.*', 'tbl_kategori.kategori', 'tbl_kategori.kategori_slug as kategori_slug')
                ->join('tbl_kategori', 'tbl_kategori.id', '=', 'tbl_berita.id_kategori')
                ->orderBy('tanggal', 'desc') 
                ->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.url('admin/berita/'.$row->id_berita.'/edit').'" class="edit btn btn-success btn-sm">Edit</a> <a href="'.url('admin/berita/delete/'.$row->id_berita).'" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->addColumn('gambar', function ($row) { 
                    $url = asset('assets/admin/upload/berita/'.$row->gambar);
                    return '<img src='.$url.' border="0" width="100" class="img-rounded" align="center" />'; 
                })
                ->rawColumns(['action','gambar'])
                ->make(true);
        }
    }

    public function checkTag($namaTag)
    {
        $namaTag = strtolower($namaTag);
        $tag = Tag::where('nama_tag', $namaTag)
                ->first();

        if (!isset($namaTag)) {
            $tag = new Tag();
            $tag->nama_tag = $namaTag;
            $tag->save();
            return 'added';
        }

        return 'not added';
    }

    public function getKategori($id)
    {
        $kategori = Kategori::where('id', $id)
                ->first();

        return $kategori;
    }
}
