@extends('layouts.master')
@push('styles')
	<style>
        .post.post-list-sm .post-title {
			font-size: 14px;
		}
		.inner-it img {
			height: 255px;
            width: 100%;
		}
        .post-grid {
            /* height: 100%; */
        }
        .details {
            height: 345px;
            
        }
	</style>
@endpush
@section('content')

    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">{{ $kategoriDetail->kategori }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $kategoriDetail->kategori }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-12">
                    <div class="row gy-4">
                    @foreach ($listBerita as $item)
                        <div class="col-sm-4">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    {{-- <a href="category.html" class="category-badge position-absolute">Lifestyle</a> --}}
                                    {{-- <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span> --}}
                                    <a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
                                        <div class="inner inner-it">
                                            <img src="{{ asset('assets/admin/upload/berita/'.$item->gambar) }}" onerror="this.src='{{ asset('assets/images/posts/trending-lg-1.jpg') }}'" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        {{-- <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/other/author-sm.png') }}" class="author" alt="author"/>Indrajatim Doe</a></li> --}}
                                        <li class="list-inline-item">{{ date('d-m-Y', strtotime($item->tanggal)); }}</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">{{ $item->judul }}</a></h5>
                                    <p class="excerpt mb-0">{{ Str::limit($item->caption, 150) }}</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    {{ $listBerita->links('vendor.pagination.custom') }}
					             
				</div>
                
			</div>

		</div>
	</section>

@stop