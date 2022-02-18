@extends('admin.layouts.master')
@push('styles')
    <link href="{{ asset('assets/admin/res') }}/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/medium-editor/default.css" rel="stylesheet">
@endpush
@section('content')

<div class="am-pagetitle">
    <h5 class="am-title">Tambah Berita</h5>
    <form id="searchBar" class="search-bar" action="index.html">
        <div class="form-control-wrapper">
            <input type="search" class="form-control bd-0" placeholder="Search...">
        </div><!-- form-control-wrapper -->
        <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
    </form><!-- search-bar -->
</div><!-- am-pagetitle -->

<div class="am-pagebody">

    <div class="card pd-20 pd-sm-40">
        <form method="POST" action="{{ url('admin/berita/edit/'.$berita['id_berita']) }}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Judul: <span class="tx-danger">*</span></label>
                            <input class="form-control judul" type="text" name="judul" value="{{ $berita['judul'] }}"
                                placeholder="Masukan judul" required="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Slug: <span class="tx-danger">*</span></label>
                            <input class="form-control slug" type="text" name="slug" value="{{ $berita['slug'] }}"
                                placeholder="Masukan slug" required="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Gambar: <span class="tx-danger">*</span></label>
                            <input type="file" name="gambar" class="form-control gambar" >
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Judul Gambar: <span class="tx-danger">*</span></label>
                            <input class="form-control judulgambar" type="text" name="judulgambar" value="{{ $berita['judul_gambar'] }}"
                                placeholder="Judul Gambar" required="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
                            <select class="form-control select2 kategori" name="kategori" data-placeholder="Pilih kategori">
                                <option label="Pilih kategori"></option>
                                @foreach ($kategori as $item) 
                                    <option value="{{ $item->id }}" <?= $berita['id_kategori'] == $item->id ? 'selected = "selected"' : '' ?>>{{ $item->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Tanggal: (Bulan/Tanggal/Tahun) <span class="tx-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                <input type="text" name="tanggal" class="form-control fc-datepicker kategori" placeholder="MM/DD/YYYY" value="<?= date('m/d/Y', strtotime($berita['tanggal'])); ?>" required="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Tag: <span class="tx-danger">*</span></label>
                            {{-- <div class="col-lg-4 mg-t-20 mg-lg-t-0"> --}}
                            <select class="form-control select2 tokenizer select2-hidden-accessible tag" name="tag[]" data-placeholder="Masukan Tag" multiple="" tabindex="-1" aria-hidden="true">
                                <?php foreach ($tagexplode as $data) { ?>                          
                                    <option value="<?= $data;?>" selected = "selected"><?= $data;?></option>                        
                                <?php } ?> 
                            </select>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Caption: <span class="tx-danger">*</span></label>
                            <input class="form-control caption" type="text" name="caption" value="{{ $berita['caption'] }}"
                                placeholder="Masukan caption" required="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Content: <span class="tx-danger">*</span></label>
                            <textarea id="theeditor" name="content" required=""> {!! $berita['content'] !!} </textarea>
                        </div>
                    </div>
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Simpan</button>
                    <button class="btn btn-secondary">Batal</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

</div><!-- am-pagebody -->

@stop

@push('scripts')
    <script src="{{ asset('assets/admin/res') }}/lib/medium-editor/medium-editor.js"></script>
    <script src="https://cdn.tiny.cloud/1/wgo0qe6aabh3vickenbemgqpkiyfmzck85pqjkgdrmecnd8v/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        var slug = function(str) {
            var $slug = '';
            var trimmed = $.trim(str);
            $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
            replace(/-+/g, '-').
            replace(/^-|-$/g, '');
            return $slug.toLowerCase();
        }

        $('.judul').keyup(function() {
            var takedata = $('.judul').val()
            $('.slug').val(slug(takedata));
        });
        
        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });

        // Select2 by showing the search
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });

        // Select2 with tagging support
        $('.select2-tag').select2({
          tags: true,
          tokenSeparators: [',', ' ']
        });

        var editor = new MediumEditor('.editable');

        tinymce.init({
            selector: '#theeditor',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak lineheight | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: "30s",
            autosave_prefix: "{path}{query}-{id}-",
            autosave_restore_when_empty: false,
            autosave_retention: "2m",
            image_advtab: true,
            importcss_append: true,
            templates: [{
                title: 'New Table',
                description: 'creates a new table',
                content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
            },
            {
                title: 'Starting my story',
                description: 'A cure for writers block',
                content: 'Once upon a time...'
            },
            {
                title: 'New list with dates',
                description: 'New List with dates',
                content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
            }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 520,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: "mceNonEditable",
            toolbar_mode: 'sliding',
            contextmenu: "link image imagetools table",
        });

    </script>
@endpush