@extends('admin.layouts.master')
@push('styles')
<link href="{{ asset('assets/admin/res') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
@endpush
@section('content')

<div class="am-pagetitle">
    <h5 class="am-title">Berita</h5>
</div><!-- am-pagetitle -->

<div class="am-pagebody">
    <div class="card pd-20 pd-sm-40">
        <table class="table table-bordered yajra-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div><!-- am-pagebody -->



@stop
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    $(function () {
        
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('ajax.berita') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'gambar', name: 'gambar'},
                {data: 'kategori', name: 'kategori'},
                {data: 'judul', name: 'judul'},
                {data: 'tanggal', name: 'tanggal'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
        });
        
    });
    </script>
@endpush