@extends('main')
@push('link-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        .container-swiper {
            height: 48rem;
        }

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
@include('pages.partials.hero',['title' => 'Daftar Dokter RSUD Blambangan','menu' => 'pasien & pengunjung'])


    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center mb-5 ">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Dokter RSUD Blambangan</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences</p>
                </div>
            </div>

            <div class="container-swiper">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($Dokter as $index => $item)
                            <div class="swiper-slide">
                                <div class="staff">
                                    <div class="img mb-4" style="background-image: url('{{ asset('storage/'. $item->gambar) }}');">
                                    </div>
                                    <div class="info text-center">
                                        <h3>{{ $item->nama }}</h3>
                                        <span class="position" style="font-size: 20px;">{{ $item->spesialis->nama_spesialis }}</span>
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
@endsection
