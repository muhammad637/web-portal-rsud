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
                                class="mr-2"><a href="index.html">Beranda</a></span> <span>Berita</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Berita RSUD
                            Blambangan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">{{ $item->judul }}
                    </h2>
                    <div><a class="text-dark"><span class="icon-calendar text-dark"></span>
                            {{ Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }}</a>
                    </div>

                    <p>
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="img-fluid">
                    </p>
                    {!! $item->isi !!}
                    <div class="mt-2">
                        {!! $item->link !!}
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>Berita Terbaru</h3>
                        @foreach ($berita as $value)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ asset('storage/' . $value->gambar) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">{{ $value->judul }}
                                        </a></h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"></span>
                                            {{ $value->updated_at->diffForHumans() }}</div>
                                        {{-- <div><a href="#"><span class="icon-person"></span> Admin</a></div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection