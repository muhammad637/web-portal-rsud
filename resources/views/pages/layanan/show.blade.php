@extends('main')
@push('link-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        /* .container-swiper {
                height: 40rem;
            } */

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush
@push('link-script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    // spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endpush
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{ asset('./bg_11.webp') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="index.html">Home</a></span> <span>Layanan</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}"
                            style="text-shadow: 2px 2px 4px #000">
                            {{ $layanan->kategoriLayanan->nama }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-2">
        <div class="container">
            <h1 class="font-weight-bold text-center text-uppercase mb-5" style="color: #7bcecc">{{ $layanan->nama }}</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $layanan->gambar) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 text-justify">
                    {!! $layanan->deskripsi !!}
                </div>
            </div>
        </div>
    </section>

    @if (count($layanan->dokter) > 0)
        <section class="pt-5 mt-5">
            <div class="container" style="background: #7bcecc; margin-bottom:7rem;">
                <h1 class="text-white font-weight-bold text-uppercase">Dokter {{ $layanan->nama }} RSUD Blambangan</h1>
                <div class="container-swiper p-1 pb-5" style="background: #7bcecc">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($layanan->dokter as $index => $item)
                                <div class="swiper-slide rounded">
                                    <div class="staff ">
                                        <div class="img mb-4"
                                            style="background-image: url('{{ asset('storage/' . $item->gambar) }}');">
                                        </div>
                                        <div class="info text-center">
                                            <h3>{{ $item->nama }}</h3>
                                            <span class="position">{{ $item->spesialis->nama_spesialis }}</span>
                                            <div class="text">
                                                <div class="row">
                                                    <div class="col">
                                                        @if (count($item->jadwalDokter) > 0)
                                                            @foreach ($item->jadwalDokter as $value)
                                                                <div class="d-flex justify-content-between text-dark">
                                                                    <p>{{ $value->hari }}</p>
                                                                    {{ Carbon\Carbon::parse($value->jam_mulai_praktik)->format('H:i') }}
                                                                    -
                                                                    {{ Carbon\Carbon::parse($value->jam_selesai_praktik)->format('H:i') }}
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <p class="text-center" style="text-align: center"> - </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
