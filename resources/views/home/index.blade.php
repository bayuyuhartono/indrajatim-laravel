@extends('layouts.master')
@push('styles')
	<style>
		
	</style>
@endpush
@section('content')

	<section class="hero-carousel">
		<div class="container-xl">
			<div class="post-carousel-lg">
				@foreach ($carouselnews as $item)
					<div class="post featured-post-xl">
						<div class="details clearfix">
							<a href="#" class="category-badge lg">{{ $item->kategori }}</a>
							<h4 class="post-title"><a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">{{ $item->judul }}</a></h4>
							<ul class="meta list-inline mb-0">
								{{-- <li class="list-inline-item"><a href="#">Indrajatim Doe</a></li> --}}
								<li class="list-inline-item">{{ date('d-m-Y', strtotime($item->tanggal)); }}</li>
							</ul>
						</div>
						<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
							<div class="thumb rounded carousel-img">
								<img src="{{ asset('assets/admin/upload/berita/'.$item['gambar']) }}" onerror="this.src='{{ asset('assets/images/posts/featured-xl-1.jpg') }}'" alt="post-title" style="width: 100%; min-height:290px; max-height: 550px;" />
							</div>
						</a>
					</div> 
				@endforeach
			</div>
		</div>
	</section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Info Terkini</h3>
						<svg height="20" width="113">
      <line x1="0" y1="10" x2="100" y2="10" style="stroke:#203656;stroke-width:3" />
    </svg>
					</div>

					<div class="padding-30 rounded bordered">
						<div class="row gy-5">
							<div class="col-sm-6">
								<!-- post -->
								<div class="post">
									<div class="thumb rounded">
										{{-- <a href="#" class="category-badge position-absolute">Lifestyle</a>
										<span class="post-format">
											<i class="icon-picture"></i>
										</span> --}}
										<a href="{{ url($infoterkini[0]->kategori_slug.'/'.$infoterkini[0]->slug) }}">
											<div class="inner">
												<img src="{{ asset('assets/admin/upload/berita/'.$infoterkini[0]['gambar']) }}" onerror="this.src='{{ asset('assets/images/posts/editor-lg.jpg') }}'" alt="post-title" />
											</div>
										</a>
									</div>
									<ul class="meta list-inline mt-4 mb-0">
										{{-- <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/other/author-sm.png') }}" class="author" alt="author"/>Katen Doe</a></li> --}}
										<li class="list-inline-item">{{ date('d-m-Y', strtotime($infoterkini[0]['tanggal'])); }}</li>
									</ul>
									<h5 class="post-title mb-3 mt-3"><a href="{{ url($infoterkini[0]->kategori_slug.'/'.$infoterkini[0]->slug) }}">{{ $infoterkini[0]['judul'] }}</a></h5>
									<p class="excerpt mb-0">{{ $infoterkini[0]['caption'] }}</p>
								</div>
							</div>
							<div class="col-sm-6">
								<!-- post -->
								@foreach ($infoterkini as $item)
									@if ($loop->index != 0)
										<div class="post post-list-sm square">
											<div class="thumb rounded">
												<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
													<div class="inner inner-it">
														<img src="{{ asset('assets/admin/upload/berita/'.$item->gambar) }}" onerror="this.src='{{ asset('assets/images/posts/editor-sm-1.jpg') }}'" alt="post-title" />
													</div>
												</a>
											</div>
											<div class="details clearfix">
												<h6 class="post-title my-0"><a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">{{ Str::limit($item->judul, 50) }}</a></h6>
												<ul class="meta list-inline mt-1 mb-0">
													<li class="list-inline-item">{{ date('d-m-Y', strtotime($item->tanggal)); }}</li>
												</ul>
											</div>
										</div>
									@endif
								@endforeach
							</div>
						</div>

						<br>
						<!-- load more button -->
						<div class="text-center">
							<a href="{{url('infoterkini')}}" class="btn btn-simple">Selengkapnya</a>
						</div>

					</div>

					<div class="spacer" data-height="50"></div>

					<!-- horizontal ads -->
					<div class="ads-horizontal text-md-center">
						<span class="ads-title">- Sponsored Ad -</span>
						<a href="#">
							<img src="https://indrajatim.com/assets/admin/upload/banner/1636963891.jpg" alt="Advertisement" />
						</a>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Kabar Jatim</h3>
						<svg height="20" width="113">
      <line x1="0" y1="10" x2="100" y2="10" style="stroke:#203656;stroke-width:3" />
    </svg>
					</div>

					<div class="padding-30 rounded bordered">
						<div class="row gy-5">
							<div class="col-sm-6">
								@foreach ($kabarjatim as $item)
									@if ($loop->index == 0)
										<!-- post large -->
										<div class="post">
											<div class="thumb rounded">
												{{-- <a href="#" class="category-badge position-absolute">Culture</a> --}}
												{{-- <span class="post-format">
													<i class="icon-picture"></i>
												</span> --}}
												<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
													<div class="inner inner-kabarjatim">
														<img src="{{ asset('assets/admin/upload/berita/'.$item->gambar) }}" onerror="this.src='{{ asset('assets/images/posts/trending-lg-1.jpg') }}'" alt="post-title" />
													</div>
												</a>
											</div>
											<ul class="meta list-inline mt-4 mb-0">
												{{-- <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/other/author-sm.png') }}" class="author" alt="author"/>Indrajatim Doe</a></li> --}}
												<li class="list-inline-item">{{ date('d-m-Y', strtotime($item->tanggal)); }}</li>
											</ul>
											<h5 class="post-title mb-3 mt-3"><a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">{{ $item->judul }}</a></h5>
											<p class="excerpt mb-0">{{ Str::limit($item->caption, 140) }}</p>
										</div>										
									@elseif (($loop->index == 1 || ($loop->index == 2)))
										<!-- post -->
										<div class="post post-list-sm square before-seperator">
											<div class="thumb rounded">
												<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
													<div class="inner">
														<img src="{{ asset('assets/admin/upload/berita/'.$item->gambar) }}" onerror="this.src='{{ asset('assets/images/posts/trending-lg-1.jpg') }}'" alt="post-title" />
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
									@endif
								@endforeach
							</div>
							<div class="col-sm-6">
								@foreach ($kabarjatim as $item)
									@if ($loop->index == 3)
										<!-- post large -->
										<div class="post">
											<div class="thumb rounded">
												{{-- <a href="#" class="category-badge position-absolute">Culture</a>
												<span class="post-format">
													<i class="icon-picture"></i>
												</span> --}}
												<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
													<div class="inner inner-kabarjatim">
														<img src="{{ asset('assets/admin/upload/berita/'.$item->gambar) }}" onerror="this.src='{{ asset('assets/images/posts/trending-lg-1.jpg') }}'" alt="post-title" />
													</div>
												</a>
											</div>
											<ul class="meta list-inline mt-4 mb-0">
												{{-- <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/other/author-sm.png') }}" class="author" alt="author"/>Katen Doe</a></li> --}}
												<li class="list-inline-item">{{ date('d-m-Y', strtotime($item->tanggal)); }}</li>
											</ul>
											<h5 class="post-title mb-3 mt-3"><a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">{{ $item->judul }}</a></h5>
											<p class="excerpt mb-0">{{ Str::limit($item->caption, 140) }}</p>
										</div>										
									@elseif (($loop->index == 4 || ($loop->index == 5)))
										<!-- post -->
										<div class="post post-list-sm square before-seperator">
											<div class="thumb rounded">
												<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
													<div class="inner">
														<img src="{{ asset('assets/admin/upload/berita/'.$item->gambar) }}" onerror="this.src='{{ asset('assets/images/posts/trending-lg-1.jpg') }}'" alt="post-title" />
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
									@endif
								@endforeach
							</div>
						</div>
						
						<hr>
						<!-- load more button -->
						<div class="text-center">
							<a href="{{url('kabarjatim')}}" class="btn btn-simple">Selengkapnya</a>
						</div>

					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Budaya</h3>
						<svg height="20" width="113">
      <line x1="0" y1="10" x2="100" y2="10" style="stroke:#203656;stroke-width:3" />
    </svg>
						<div class="slick-arrows-top">
							<button type="button" data-role="none" class="carousel-topNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
							<button type="button" data-role="none" class="carousel-topNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
						</div>
					</div>

					<div class="row post-carousel-twoCol post-carousel">
						@foreach ($budaya as $item)
							<!-- post -->
							<div class="post post-over-content col-md-6">
								<div class="details clearfix">
									{{-- <a href="#" class="category-badge">Inspiration</a> --}}
									<h4 class="post-title"><a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">{{ $item->judul }}</a></h4>
									<ul class="meta list-inline mb-0">
										{{-- <li class="list-inline-item"><a href="#">Katen Doe</a></li> --}}
										<li class="list-inline-item">{{ date('d-m-Y', strtotime($item->tanggal)); }}</li>
									</ul>
								</div>
								<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
									<div class="thumb rounded">
										<div class="inner budaya-img">
											<img src="{{ asset('assets/admin/upload/berita/'.$item->gambar) }}" onerror="this.src='{{ asset('assets/images/posts/trending-lg-1.jpg') }}'" alt="thumb" />
										</div>
									</div>
								</a>
							</div>
						@endforeach
						
					</div>

					<br>
					<!-- load more button -->
					<div class="text-center">
						<a href="{{url('budaya')}}" class="btn btn-simple">Selengkapnya</a>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Sejarah</h3>
						<svg height="20" width="113">
      <line x1="0" y1="10" x2="100" y2="10" style="stroke:#203656;stroke-width:3" />
    </svg>
					</div>

					<div class="padding-30 rounded bordered">

						<div class="row">
							@foreach ($sejarah as $item)
								<div class="col-md-12 col-sm-6">
									<!-- post -->
									<div class="post post-list clearfix">
										<div class="thumb rounded">
											{{-- <span class="post-format-sm">
												<i class="icon-picture"></i>
											</span> --}}
											<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">
												<div class="inner inner-sejarah">
													<img src="{{ asset('assets/admin/upload/berita/'.$item['gambar']) }}" onerror="this.src='{{ asset('assets/images/posts/featured-xl-1.jpg') }}'" alt="post-title" />
												</div>
											</a>
										</div>
										<div class="details">
											<ul class="meta list-inline mb-3">
												{{-- <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/other/author-sm.png') }}" class="author" alt="author"/>Katen Doe</a></li> --}}
												{{-- <li class="list-inline-item"><a href="#">Trending</a></li> --}}
												<li class="list-inline-item">{{ date('d-m-Y', strtotime($item->tanggal)); }}</li>
											</ul>
											<h5 class="post-title"><a href="{{ url($item->kategori_slug.'/'.$item->slug) }}">{{ $item->judul }}</a></h5>
											<p class="excerpt mb-0">{{ Str::limit($item->caption, 70) }}</p>
											<div class="post-bottom clearfix d-flex align-items-center">
												<div class="social-share me-auto">
													<button class="toggle-button icon-share"></button>
													<ul class="icons list-unstyled list-inline mb-0">
														<li class="list-inline-item"><a href="https://www.facebook.com/indrajatim.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
														<li class="list-inline-item"><a href="https://twitter.com/indrajatimcom" target="_blank"><i class="fab fa-twitter"></i></a></li>
														<li class="list-inline-item"><a href="https://www.instagram.com/indrajatimcom" target="_blank"><i class="fab fa-instagram"></i></a></li>
														<li class="list-inline-item"><a href="https://www.youtube.com/indrajatim" target="_blank"><i class="fab fa-youtube"></i></a></li>
														<li class="list-inline-item"><a href="mailto:media@indrajatim.com"><i class="far fa-envelope"></i></a></li>
													</ul>
												</div>
												<div class="more-button float-end">
													<a href="{{ url($item->kategori_slug.'/'.$item->slug) }}"><span class="icon-options"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						<!-- load more button -->
						<div class="text-center">
							<a href="{{url('sejarah')}}" class="btn btn-simple">Selengkapnya</a>
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
						<img src="{{ asset('assets/images/logo.png') }}" alt="logo.png" class="mb-4 badge-logo" />
						

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
													<img src="{{ asset('assets/admin/upload/berita/'.$item['gambar']) }}" onerror="this.src='{{ asset('assets/images/posts/featured-xl-1.jpg') }}'" alt="post-title" />
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
								<img src="{{ asset('assets/admin/upload/banner/amigos.jpg') }}" alt="Advertisement" />	
								<img src="{{ asset('assets/admin/upload/banner/griyabersemi.jpg') }}" alt="Advertisement" />	
								<img src="{{ asset('assets/other/plasma_cutting.png') }}" alt="Advertisement" />	
								<img src="{{ asset('assets/other/alkautsar.jpg') }}" alt="Advertisement" />	
								<img src="{{ asset('assets/other/sklera.png') }}" alt="Advertisement" />	
								<img src="{{ asset('assets/other/spacebanner_2.png') }}" alt="Advertisement" />	
								<img src="{{ asset('assets/other/spacebanner_3.png') }}" alt="Advertisement" />	
								<img src="{{ asset('assets/other/spacebanner_4.png') }}" alt="Advertisement" />	
								<img src="{{ asset('assets/other/spacebanner_5.png') }}" alt="Advertisement" />	
							</a>
						</div>

					</div>

				</div>

			</div>

		</div>
	</section>
@stop