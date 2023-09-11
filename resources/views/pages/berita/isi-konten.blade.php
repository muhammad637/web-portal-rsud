@extends('main')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('{{ asset('images/bg1.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="{{ route('home') }}">Beranda</a></span> <span>Berita</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Artikel RSUD
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
                    <h2 class="font-size-2 font-weight-bold">{{ $isiKonten->judul }}
                    </h2>
                    <div class="mb-2"><a class="text-dark"><span class="icon-calendar text-dark"></span>
                            {{ Carbon\Carbon::parse($isiKonten->created_at)->format('D, d M Y') }}</a>
                    </div>

                    <p>
                        <img src="{{ asset('storage/' . $isiKonten->gambar) }}" alt="" class="img-fluid">
                    </p>
                    {!! $isiKonten->deskripsi !!}
                    <div class="mt-2">
                    </div>
                    @if (isset($isiKonten->link_yt) || isset($isiKonten->link_yt))
                        <span class="text-center  font-weight-bold d-block text-uppercase">
                            Selengkapnya
                        </span>
                    @endif
                    <div class="row justify-conten-center align-items-center">
                        @if (isset($isiKonten->link_yt))
                            <div class="col-lg-8 mb-4 col-md-12">
                                @include('pages.berita.youtube', ['linkYT' => $isiKonten->link_yt])
                            </div>
                        @endif
                        @if (isset($isiKonten->link_ig))
                            <div class="col-lg-4 col-md-12">

                                @include('pages.berita.instagram', ['linkIG' => $isiKonten->link_ig])
                            </div>
                        @endif

                    </div>
                    {{-- youtube --}}
                    {{-- {!! $isiKonten->link_ig !!} --}}
                    {{-- instagram --}}
                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Kategori</h3>
                            @foreach ($kategoriKonten as $value)
                                <li><a href="{{ route('kategori-berita.index', ['kategoriKonten' => $value->slug]) }}"
                                        class="text-dark">{{ $value->nama }}
                                        <span>({{ count($value->konten) }})</span>
                                    </a></li>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Artikel Terbaru</h3>
                        @foreach ($kontenTerbaru as $index)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url({{ asset('storage/' . $index->gambar) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ route('berita.show', ['konten' => $index->slug]) }}">{{ $index->judul }}
                                        </a></h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"></span>
                                            {{ $index->updated_at->diffForHumans() }}</div>
                                        {{-- <div><a href="#"><span class="icon-person"></span> Admin</a></div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Artikel</h3>
                        <div class="tagcloud">
                            @if (count($isiKonten->kategori_konten) == 0)
                                <p>--</p>
                            @endif
                            @foreach ($isiKonten->kategori_konten as $item_kategori)
                                <a href="{{ route('kategori-berita.index', ['kategoriKonten' => $item_kategori->slug]) }}"
                                    class="tag-cloud-link">{{ $item_kategori->nama }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
