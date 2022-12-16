@extends('layouts.master')
@push('styles')
<style>

</style>
@endpush
@section('content')

<section class="page-header">
    <div class="container-xl">
        <div class="text-center">
            <h1 class="mt-0 mb-2">Tentang Indrajatim</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Indrajatim</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- section main content -->
<section class="main-content">
    <div class="container-xl">

        <h2>Tentang Kami</h2>
        <p>Indra Jatim adalah sebuah
            wahana komunikasi massa yang
            melaksanakan kegiatan jurnalistik meliputi, mencari, memperoleh, memiliki,
            menyimpan, mengolah, dan menyampaikan, informasi baik dalam bentuk tulisan,
            foto, dan video, serta data dan grafik, maupun dalam bentuk lainnya. Lahir pada
            03 Juli tahun 2021. Redaksi Indra Jatim memiliki tujuan untuk melihat,
            mendengar, dan menyajikan seluruh peristiwa kehidupan masyarakat Jawa Timur
            yang teraktual. Sehingga berguna untuk menambah wawasan serta menjadi ruang
            belajar bagi seluruh pembaca.
        </p>
        <p>Redaksi Indra Jatim
            berkomitmen, berpegang teguh pada kode etik
            jurnalistik dalam proses peliputan atau penggalian data narasumber, demi
            memberikan sajian berita yang akurat, dan menjadi penyeimbang ditengah
            derasnya arus informasi yang diterima oleh masyarakat.<br>
        </p>

        <h2>Alamat</h2>
        <p>Medokan asri barat blok i no. 23, surabaya</p>

        <h2>Email</h2>
        <p><a href="mailto:media@indrajatim.com">media@indrajatim.com</a></p>

        {{-- <h2>Tim Kami</h2>
        <p><b>Dewan Redaksi</b></p>
        <p>Fahmi Faqih</p>
        <p><b>Pemimpin Redaksi</b> </p>
        <p>Satrio Nugroho</p>
        <p><b>Jurnalis</b></p>
        <p>Izzatun Najibah</p>
        <p>Canty Nadya Putri</p>
        <p>Madania Nur Aisyah Putri</p>
        <p><b>Desain Grafis</b></p>
        <p>Satriyo Bimo</p>
        <p><b>IT</b></p>
        <p>Bayu Puguh Yuhartono</p>
        <p><br></p> --}}

    </div>
</section>

@stop