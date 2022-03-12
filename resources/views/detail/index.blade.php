@extends('layouts.master')
@push('styles')
<style>
	.featured-image img {
		width: 100%;
	}
	.post-single .featured-image img {
		margin-bottom: 7px;
	}
	.featured-image p {
		font-size: 13px;
		font-style: italic;
		line-height: 15px;
	}
	
	.post-single .post-content {
		color: #373e47;
	}
</style>
@endpush
@section('content')

	<!-- section main content -->
	<section class="main-content mt-3">
		<div class="container-xl">

            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Inspiration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">3 Easy Ways To Make Your iPhone Faster</li>
                </ol>
            </nav> --}}

			<div class="row gy-4">

				<div class="col-lg-8">
					
					<!-- horizontal ads -->
					<div class="ads-horizontal text-md-center">
						<span class="ads-title">- Sponsored Ad -</span>
						<a href="#">
							<img src="https://indrajatim.com/assets/admin/upload/banner/1636963891.jpg" alt="Advertisement" />
						</a>
					</div>

					<!-- post single -->
                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">{{ $detailBerita->judul }}</h1>
							<ul class="meta list-inline mb-0">
								{{-- <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Indrajatim Doe</a></li>
								<li class="list-inline-item"><a href="#">Trending</a></li> --}}
								<li class="list-inline-item">{{ date('d-m-Y', strtotime($detailBerita->tanggal)); }}</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{ asset('assets/admin/upload/berita/'.$detailBerita->gambar) }}" onerror="this.src='{{ asset('assets/images/posts/featured-lg.jpg') }}'" alt="{{ $detailBerita->judul_gambar }}" />
							<p>{{ $detailBerita->judul_gambar }}</p>
						</div>
						<!-- post content -->
						<div class="post-content clearfix">
							{!! $detailBerita->content !!}
						</div>
						<!-- post bottom section -->
						<div class="post-bottom">
							<div class="row d-flex align-items-center">
								<div class="col-md-6 col-12 text-center text-md-start">
									<!-- tags -->

									@foreach ($tag as $item)
										<a href="#" class="tag">#{{ $item }}</a> 
									@endforeach
								</div>
								<div class="col-md-6 col-12">
									<!-- social icons -->
									<ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
										<li class="list-inline-item"><a href="https://www.facebook.com/indrajatim.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
										<li class="list-inline-item"><a href="https://twitter.com/indrajatimcom" target="_blank"><i class="fab fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="https://www.instagram.com/indrajatimcom" target="_blank"><i class="fab fa-instagram"></i></a></li>
										<li class="list-inline-item"><a href="https://www.youtube.com/indrajatim" target="_blank"><i class="fab fa-youtube"></i></a></li>
										<li class="list-inline-item"><a href="mailto:media@indrajatim.com"><i class="far fa-envelope"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

                    </div>
					
					<br>
					<!-- horizontal ads -->
					<div class="ads-horizontal text-md-center">
						<span class="ads-title">- Sponsored Ad -</span>
						<a href="#">
							<img src="https://indrajatim.com/assets/admin/upload/banner/1637030741.jpg" alt="Advertisement" />
						</a>
					</div>

                </div>

				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="">
						<!-- widget about -->
						<img src="{{ asset('assets/images/logo.png') }}" alt="logo.png" class="indrajatim badge-logo" />
						

						<!-- widget popular posts -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Berita Populer</h3>
								<svg height="20" width="113">
									<line x1="0" y1="10" x2="100" y2="10" style="stroke:#203656;stroke-width:3" />
								  </svg>
							</div>
							<div class="widget-content">
								@foreach ($populer as $item)									
									<!-- post -->
									<div class="post post-list-sm circle">
										<div class="thumb circle">
											<span class="number">{{ $loop->index + 1 }}</span>
											<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
												<div class="inner inner-populer">
													<img src="{{ asset('assets/admin/upload/berita/'.$item['gambar']) }}" onerror="this.src='{{ asset('assets/images/posts/featured-xl-1.jpg') }}'" alt="{{ $item['judul_gambar'] }}" />
												</div>
											</a>
										</div>
										<div class="details clearfix">
											<h6 class="post-title my-0"><a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">{{ $item->judul }}</a></h6>
											<ul class="meta list-inline mt-1 mb-0">
												<li class="list-inline-item">{{ date('d-m-Y', strtotime($item->tanggal)); }}</li>
											</ul>
										</div>
									</div>
								@endforeach
							</div>		
						</div>

						<!-- widget advertisement -->
						<div class="widget no-container rounded text-md-center">
							<span class="ads-title">- Sponsored Ad -</span>
							<a href="#" class="widget-ads">
								<img src="{{ asset('assets/admin/upload/banner/1633681714.jpg') }}" alt="Advertisement" />	
							</a>
							<a href="https://wa.me/6285604140095" class="widget-ads">
								<img src="{{ asset('assets/admin/upload/banner/amigos.jpg') }}" alt="Advertisement" />	
							</a>
							<a href="https://wa.me/6287853098462" class="widget-ads">
								<img src="{{ asset('assets/admin/upload/banner/griyabersemi.jpg') }}" alt="Advertisement" />
							</a>
							<a href="https://wa.me/6281252356193" class="widget-ads">	
								<img src="{{ asset('assets/other/plasma_cutting.png') }}" alt="Advertisement" />
							</a>
							<a href="https://wa.me/6288989493158" class="widget-ads">	
								<img src="{{ asset('assets/other/alkautsar.jpg') }}" alt="Advertisement" />	
							</a>
							<a href="https://wa.me/628958811444" class="widget-ads">
								<img src="{{ asset('assets/other/sklera.png') }}" alt="Advertisement" />	
							</a>
							<a href="https://wa.me/628979951727" class="widget-ads">
								<img src="{{ asset('assets/other/sedulur.jpg') }}" alt="Advertisement" />	
							</a>
							<a href="#" class="widget-ads">
								<img src="{{ asset('assets/other/spacebanner_3.png') }}" alt="Advertisement" />	
							</a>
							<a href="#" class="widget-ads">
								<img src="{{ asset('assets/other/spacebanner_4.png') }}" alt="Advertisement" />	
							</a>
							<a href="#" class="widget-ads">
								<img src="{{ asset('assets/other/spacebanner_5.png') }}" alt="Advertisement" />	
							</a>
						</div>

					</div>

				</div>

			</div>

		</div>
	</section>
@stop