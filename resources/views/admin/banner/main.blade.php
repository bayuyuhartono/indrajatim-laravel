@extends('admin.layouts.master')
@push('styles')
    <link href="{{ asset('assets/admin/res') }}/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/res') }}/lib/medium-editor/default.css" rel="stylesheet">
@endpush
@section('content')

<div class="am-pagetitle">
    <h5 class="am-title">Banner Utama</h5>
    <form id="searchBar" class="search-bar" action="index.html">
        <div class="form-control-wrapper">
            <input type="search" class="form-control bd-0" placeholder="Search...">
        </div><!-- form-control-wrapper -->
        <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
    </form><!-- search-bar -->
</div><!-- am-pagetitle -->

<div class="am-pagebody">

    <div class="card pd-20 pd-sm-40">
        <form method="POST" action="{{ url('admin/banner-main') }}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="form-layout">
                <h3>Banner Atas</h3>
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Gambar: <span class="tx-danger">*</span></label>
                            <input type="file" name="gambar-atas" class="form-control gambar">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Link: <span class="tx-danger">*</span></label>
                            <input class="form-control judul" type="text" name="linkAtas" value=""
                                placeholder="Masukan link">
                        </div>
                    </div>
                </div><!-- row -->

                <h3>Banner Bawah</h3>
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Gambar: <span class="tx-danger">*</span></label>
                            <input type="file" name="gambar-bawah" class="form-control gambar">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Link: <span class="tx-danger">*</span></label>
                            <input class="form-control judul" type="text" name="linkBawah" value=""
                                placeholder="Masukan link">
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

    </script>
@endpush