@extends('main')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('images/bg1.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="index.html">Beranda</a></span> <span>Artikel</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Artikel Kesehatan
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry">
                                @foreach ($artikel as $item)
                                    <a href="blog-single.html" class="block-20"
                                        style="background-image: url('{{ $item->gambar }}');">
                                    </a>
                                    <div class="text d-flex py-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">
                                                    {{ Carbon\Carbon::parse($item->created_at)->format('d-m-y') }}</a></div>
                                            <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 9</a>
                                            </div>
                                        </div>
                                        <div class="desc pl-sm-3 pl-md-5">
                                            <h3 class="heading"><a href="#">{{ $item->judul }}
                                                </a></h3>
                                            <p>{{ $item->judul }}.</p>
                                            <p><a href="" class="btn btn-primary btn-outline-primary">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- END: col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon-search" style="float: right;"></span>
                                <input type="text" class="form-control" placeholder="Ketik kata kunci dan tekan enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Katogeri</h3>
                            @foreach ($kategori as $item)
                                <li><a href="#">{{ $item->nama_kategori }}
                                        <span>({{ count($item->beritadanArtikel) }})</span></a></li>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Artikel Terbaru</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{$item->gambar}});"></a>
                            <div class="text">
								@foreach ($ArtikelTerbaru as $item)
									
								@endforeach
                                <h3 class="heading"><a href="#">{{$item->judul}}
                                    </a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> {{ Carbon\Carbon::parse($item->created_at)->format('d-m-y') }} </a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
