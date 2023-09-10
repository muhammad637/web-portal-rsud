@extends('main')
@push('link-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    @livewireStyles
    <style>
        .ftco-section .nav-pills .nav-link.active,
        .ftco-section .nav-pills .nav-link:hover {
            color: #fff;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            background: #2470A0;
            bordeR: 1px solid #71C9CE;
        }


        .container-swiper {
            height: 20rem;
        }

        .container-apa {
            height: 58rem;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        @media (min-width: 1024px) {
            .container-swiper {
                height: 40rem;
            }

            /* Aturan lainnya sesuai kebutuhan */
            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                height: calc((100% - 30px) / 2) !important;
            }
        }



        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* @media (min-width) */
    </style>
@endpush
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('{{ asset('images/bg1.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="index.html">Home</a></span> <span>Layanan</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}"
                            style="text-shadow: 2px 2px 4px #000;">
                            {{ $kategoriLayanan->nama }} RSUD BLAMBANGAN</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-5"></div>
    <section class=" ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2" style=><strong>LAYANAN UNGGULAN</strong></h2>
                </div>
            </div>
            <div class="container-swiper">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('images/poli/icon _cancer-ribbon.png') }}" alt=""
                                            style="width: 50%; height: 50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Lorem.</h3>
                                        <p class="deskripsi" id="deskripsi">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Iusto, nihil!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('images/poli/icon _cancer-ribbon.png') }}" alt=""
                                            style="width: 50%; height: 50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Lorem.</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nihil!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('images/poli/icon _cancer-ribbon.png') }}" alt=""
                                            style="width: 50%; height: 50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Lorem.</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nihil!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('images/poli/icon _cancer-ribbon.png') }}" alt=""
                                            style="width: 50%; height: 50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Lorem.</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nihil!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('images/poli/icon _cancer-ribbon.png') }}" alt=""
                                            style="width: 50%; height: 50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Lorem.</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nihil!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('images/poli/icon _cancer-ribbon.png') }}" alt=""
                                            style="width: 50%; height: 50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Lorem.</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, nihil!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('link-script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".mySwiper", {
                grid: {
                    rows: 2,
                },
                breakpoints: {
                    640: {
                        grid: {
                            rows: 1,
                        },
                        slidesPerView: 1,
                    },
                    768: {
                        grid: {
                            rows: 1,
                        },
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
            var text = $("#deskripsi").val();

        })
    </script>
    @livewireScripts
@endpush
