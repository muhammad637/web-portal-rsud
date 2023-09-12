@extends('main')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image:url({{ asset('./bg_11.webp') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: .5}" style="text-shadow: 2px 2px 4px #000;"><span
                                class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Layanan</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}" style="text-shadow: 2px 2px 4px #000;">
                            {{ $kategoriLayanan->nama }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                @foreach ($kategoriLayanan->layanan as $item)
                    <div class="col-md-6 ftco-animate img about-image order-md-last"
                        style="background-image: url({{ asset('storage/'.$item->gambar) }});">
                    </div>
                    <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center">
                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel"
                                    aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-2" style="color: #71C9CE"><b>{{ $item->nama }}</b></h2>
                                        <p>{!! $item->deskripsi !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>

        </div>
    </section> --}}
    <div class="mt-5"></div>
    <section class="ftco-section-2">
        @foreach ($kategoriLayanan->layanan as $item)
            @if ($loop->iteration % 2 == 1)
                {{-- <div class="container-fluid mb-1">
                    <div class="row d-md-flex">
                        <div class="col-md-6 ftco-animate img about-image order-md-last"
                            style="background-image: url('{{ asset('storage/' . $item->gambar) }}'); height:40rem;">
                        </div>
                        <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                            <div class="about-wrap" style="background: #fff; color:black;">
                                <h1>{{ $item->nama }}</h1>
                                <p>{!! $item->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                 <div class="container-fluid mb-5   ">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12 px-1 order-md-last">
                            <div class="bg-white">
                                <div class="text-center">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" 
                                        alt="testing">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 ">
                            <div class="align-items-center text-dark">
                                <h1 class="text-uppercase my-2 text-center" style=" font-weight:bold;">{{ $item->nama }}</h1>
                                <p class="">{!! $item->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="container-fluid mb-5">
                    <div class="row  justify-content-center" style="background: #7bcecc;">
                        <div class="col-md-7 col-sm-12 px-0">
                            <div class="bg-white">
                                <div class="text-center">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid"    
                                        alt="testing">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 ">
                            <div class="align-items-center text-white">
                                <h1 class="text-uppercase my-2 text-center" style="color: white; font-weight:bold;">{{ $item->nama }}</h1>
                                <p>{!! $item->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach



    </section>
@endsection
