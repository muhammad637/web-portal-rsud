@extends('main')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('{{asset('images/bg1.jpg')}}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="index.html">Beranda</a></span> <span>Artikel</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}"> Kumpulan Berita {{$kategoriKonten->nama}}
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
                                @foreach ($kategoriKonten->konten as $item)
                                    <div class="block-20" style="background-image: url('{{asset('storage/'. $item->gambar )}}');">
                                    </div>
                                    <div class="text d-flex py-4">
                                        <div class="meta mb-3">
                                            <div>
                                                {{ Carbon\Carbon::parse($item->created_at)->format('d-m-y') }}</div>
                                            <div>Admin</div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 9
                                            </div>
                                        </div>
                                        <div class="desc pl-sm-3 pl-md-5">
                                            <h3 class="heading">{{ $item->judul }}
                                            </h3>
                                            <p>{{ $item->judul }}.</p>
                                            <p><a href="{{ route('berita.show', ['konten' => $item->slug]) }}"
                                                    class="btn btn-primary btn-outline-primary">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            {{-- {{ $kategoriKonten->links('pagination::bootstrap-4') }} --}}
                        </div>
                    </div>
                </div> <!-- END: col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    {{-- <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon-search" style="float: right;"></span>
                                <input type="text" class="form-control" placeholder="Ketik kata kunci dan tekan enter">
                            </div>
                        </form>
                    </div> --}}
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Katogeri</h3>
                            @foreach ($kategoriKontenAll as $item)
                                <li><a href="{{route('kategori-berita.index',['kategoriKonten' => $item->slug])}}" class="text-decoration-none text-dark">{{ $item->nama }}
                                        <span>({{ count($item->konten) }})</span></a></li>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Artikel Terbaru</h3>
                        <div class="block-21 mb-4">
                            @foreach ($kontenTerbaru as $item)
                                <a class="blog-img mr-4" href="{{route('berita.show',['konten'=> $item->slug])}}" style="background-image: url({{ asset('storage/'.$item->gambar) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{route('berita.show',['konten'=> $item->slug])}}">{{ $item->judul }}
                                        </a></h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"></span>
                                                {{ Carbon\Carbon::parse($item->created_at)->format('d-m-y') }}</div>
                                        <div><span class="icon-person"></span> Admin</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
