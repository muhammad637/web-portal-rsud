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
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('images/bg1.webp');">
            <div class="overlay"></div>
        </div>
        <div class="slider-item" style="background-image: url('images/bg3.webp');">
            <div class="overlay"></div>
        </div>
        <div class="slider-item" style="background-image: url('images/bg2.webp');">
            <div class="overlay"></div>
        </div>

    </section>

    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 color-1 p-4">
                    <h3 class="mb-4">Telpon Darurat</h3>
                    <p>Hubungi nomor telfon jika anda mengalami keadaan darurat</p>
                    <span class="phone-number">(0333) 5672572</span>
                </div>
                <div class="col-md-3 color-2 p-4">
                    <h3 class="mb-4">Jam Operasional </h3>
                    <p class="openinghours d-flex">
                        <span>Senin - Kamis</span>
                        <span>07:00 - 14:00</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Jum'at</span>
                        <span>07:00 - 10:30</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Sabtu</span>
                        <span>07:00 - 12:00</span>
                    </p>
                </div>
                <div class="col-md-6 color-3 p-4">
                    <h3 class="mb-2">Cari Dokter</h3>
                    <form action="{{ route('pasien-dan-pengunjung.dokter.cari') }}" class="appointment-form">

                        @livewire('search-dokter', ['Spesialis' => $Spesialis])


                        <div class="form-group">
                            <input type="submit" value="Telusuri" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- layanan unggulan --}}
    <section class=" ftco-services mt-5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2" style=><strong>LAYANAN UNGGULAN</strong></h2>
                </div>
            </div>
            <div class="container-swiper">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($LayananUnggulan as $layanan_unggulan => $item)
                            <div class="swiper-slide">
                                <div class="d-flex align-self-stretch ftco-animate">
                                    <div class="media block-6 services d-block text-center">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('storage/' . $item->icon) }}" alt=""
                                                style="width: 50%; height: 50%;">
                                        </div>
                                        <div class="media-body p-2 mt-3">
                                            <h3 class="heading">{{ $item->nama }}</h3>
                                            <p>{!! $item->deskripsi !!}</p>
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
    {{-- galeri --}}
    <section class="ftco-gallery my-5">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/6.webp); background-size: cover;">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/suntik.webp); background-size: cover;">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/pp.webp); background-size: cover;">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/dokter.webp); background-size:cover;">

                    </a>
                </div>



            </div>
        </div>
    </section>
    {{-- sejarah --}}
    <section class="ftco-section">
        <div class="container-wrap mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 ftco-animate img home-sejarah-image  fadeInUp ftco-animated" id="#col-tes"
                    style="background-image: url(images/halamanrsud.jpg);">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="about-wrap">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap mb-5">
                                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active text-white" id="v-pills-whatwedo-tab" data-toggle="pill"
                                        href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo"
                                        aria-selected="true"><strong>Sejarah</strong></a>

                                    <a class="nav-link text-white" id="v-pills-mission-tab" data-toggle="pill"
                                        href="#v-pills-mission" role="tab" aria-controls="v-pills-mission"
                                        aria-selected="false"><strong>Maklumat</strong></a>
                                </div>
                            </div>

                            <div class="col-md-12 d-flex align-items-center">

                                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel"
                                        aria-labelledby="v-pills-whatwedo-tab">
                                        <div>
                                            <p>Berdiri sejak tahun 1930 sebagai Pusat Kesehatan Sederhana jaman Belanda,
                                                yang hanya melayani Pelayanan Kesehatan Dasar dan Penyakit Menular hingga
                                                sekarang berkembang menjadi Rumah Sakit Kelas B Pemerintah dan lulus
                                                Akreditasi PARIPURNA KARS 2012
                                                Kini telah menjadi Pusat Rujukan Spesialis di kabupaten Banyuwangi, RSUD
                                                Blambangan selalu berbenah dalam hal pelayanan kesehatan sehingga dapat
                                                menyajikan pelayanan yang modern dan berkelas</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-mission" role="tabpanel"
                                        aria-labelledby="v-pills-mission-tab">
                                        <div>
                                            <p>Maklumat sejak tahun 1930 sebagai Pusat Kesehatan Sederhana jaman Belanda,
                                                yang hanya
                                                melayani Pelayanan Kesehatan Dasar dan Penyakit Menular hingga sekarang
                                                berkembang
                                                menjadi Rumah Sakit Kelas B Pemerintah dan lulus Akreditasi PARIPURNA KARS
                                                2012
                                                Kini telah menjadi Pusat Rujukan Spesialis di kabupaten Banyuwangi, RSUD
                                                Blambangan
                                                selalu berbenah dalam hal pelayanan kesehatan sehingga dapat menyajikan
                                                pelayanan yang
                                                modern dan berkelas</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- artikel --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2"><strong>BERITA</strong></h2>
                </div>
            </div>
            <div class="row">

                @foreach ($Berita as $berita)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20"
                                style="background-image: url('{{ 'storage/'.$berita->gambar }}');">
                            </a>
                            <div class="text d-flex py-4">
                                <div class="meta mb-3">
                                    <div><a href="#">{{ $berita->created_at }}</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span>
                                            {{ $berita->views }}</a></div>
                                </div>
                                <div class="desc pl-3">
                                    <h3 class="heading"><a href="#">{{ $berita->judul }}</a></h3>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
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
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        // spaceBetween: 20,
                    },
                    768: {
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
        })
    </script>
    @livewireScripts
@endpush
