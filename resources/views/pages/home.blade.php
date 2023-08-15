@extends('main')
@push('link-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        .container-swiper {
            height: 20rem;
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
        <div class="slider-item" style="background-image: url('images/bg1.jpg');" loading="lazy">
            <div class="overlay"></div>
        </div>
        <div class="slider-item" style="background-image: url('images/bg3.jpg');">
            <div class="overlay"></div>
        </div>
        <div class="slider-item" style="background-image: url('images/bg2.jpg');">
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
                    <form action="#" class="appointment-form">
                        <div class="row">


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-user"></span></div>
                                    <input type="text" class="form-control" id="appointment_name"
                                        placeholder="Nama Dokter">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-select form-control"
                                            aria-label="select example">
                                            <option value="" class="text-dark">Spesialis</option>
                                            <option value="" class="text-dark">Teeth Whitening</option>
                                            <option value="" class="text-dark">Teeth CLeaning</option>
                                            <option value="" class="text-dark">Quality Brackets</option>
                                            <option value="" class="text-dark">Modern Anesthetic</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Telusuri" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- layanan unggulan --}}
    <section class="ftco-section ftco-services">
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
                                        <img src="{{ 'images/dsa.png' }}" alt="" style="width: 50%; height: 50%;">
                                        {{-- <span class="flaticon-tooth-1"></span> --}}
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">DSA</h3>
                                        <p>Prosedur endovascular yang menjadi gold standar untuk semua tindakan pembuluh
                                            darah otak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/catchlab.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Cath Lab</h3>
                                        <p>Pelayanan yang di lakukan di laboratorium kateterisasi jantung & angiografi untuk
                                            menentukan
                                            Diagnostik penyakit jantung dan pembuluh darah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/hemodalisis.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Hemodalisis</h3>
                                        <p>Hemodialisis merupakan terapi cuci darah di luar tubuh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/onkologi.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Bedah Onkologi Kemoterapi</h3>
                                        <p>Langkah pengobatan pada pasien kanker yang bertujuan mematikan sel-sel kanker.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        {{-- <div class="container-wrap mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img" style="background-image: url(images/halamanrsud.jpg);">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="about-wrap">
                        <div class="heading-section heading-section-white text-center ftco-animate">
                            <button type="button" class="btn btn-info mb-5" id="btnSejarah">Sejarah</button>
                            <button type="button" class="btn btn-secondary mb-5" id="btnMaklumat">Maklumat</button>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="text-center" id="textSejarah">
                                <p>Berdiri sejak tahun 1930 sebagai Pusat Kesehatan Sederhana jaman Belanda, yang hanya
                                    melayani Pelayanan Kesehatan Dasar dan Penyakit Menular hingga sekarang berkembang
                                    menjadi Rumah Sakit Kelas B Pemerintah dan lulus Akreditasi PARIPURNA KARS 2012
                                    Kini telah menjadi Pusat Rujukan Spesialis di kabupaten Banyuwangi, RSUD Blambangan
                                    selalu berbenah dalam hal pelayanan kesehatan sehingga dapat menyajikan pelayanan yang
                                    modern dan berkelas</p>
                            </div>
                            <div class="text-center d-none" id="textMaklumat">
                                <p>Maklumat sejak tahun 1930 sebagai Pusat Kesehatan Sederhana jaman Belanda, yang hanya
                                    melayani Pelayanan Kesehatan Dasar dan Penyakit Menular hingga sekarang berkembang
                                    menjadi Rumah Sakit Kelas B Pemerintah dan lulus Akreditasi PARIPURNA KARS 2012
                                    Kini telah menjadi Pusat Rujukan Spesialis di kabupaten Banyuwangi, RSUD Blambangan
                                    selalu berbenah dalam hal pelayanan kesehatan sehingga dapat menyajikan pelayanan yang
                                    modern dan berkelas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container-wrap mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img" style="background-image: url(images/halamanrsud.jpg);" loading="lazy">
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

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3"><strong>ARTIKEL KESEHATAN</strong></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url(images/dehidrasi.png);"></div>
                            <br>
                            <br>
                            <div class="info text-center">
                                <div class="text">
                                    <p>Waspada Dehidrasi pada Anak !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url(images/udud.png);"></div>
                            <br>
                            <br>
                            <div class="info text-center">
                                <div class="text">
                                    <p>Dampak Rokok Elektronik (Vape) pada Kesehatan Paru-Paru</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4  d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url(images/pijit.png);"></div>
                            <br>
                            <br>
                            <div class="info text-center">
                                <div class="text">
                                    <p>Cough CPR sebagai Penanganan Henti Jantung : Mitos atau Fakta</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/6.jpg); background-size: cover;">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/suntik.jpg); background-size: cover;">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/pp.jpeg); background-size: cover;">
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                        style="background-image: url(images/dokter.jpeg); background-size:cover;">

                    </a>
                </div>

                <section class="ftco-section">

                    <div class="container">
                        <div class="row justify-content-center mb-5 pb-3">
                            <div class="col-md-7 text-center heading-section ftco-animate">
                                <h2 class="mb-2"><strong>BERITA</strong></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry">
                                    <a href="blog-single.html" class="block-20"
                                        style="background-image: url('images/artikel1.png');">
                                    </a>
                                    <div class="text d-flex py-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">Sep. 20, 2018</a></div>
                                            <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span>
                                                    3</a></div>
                                        </div>
                                        <div class="desc pl-3">
                                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no
                                                    control about the blind texts</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry" data-aos-delay="100">
                                    <a href="blog-single.html" class="block-20"
                                        style="background-image: url('images/artikel2.png');">
                                    </a>
                                    <div class="text d-flex py-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">Sep. 20, 2018</a></div>
                                            <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span>
                                                    3</a></div>
                                        </div>
                                        <div class="desc pl-3">
                                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no
                                                    control about the blind texts</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry" data-aos-delay="200">
                                    <a href="blog-single.html" class="block-20"
                                        style="background-image: url('images/artikel3.png');">
                                    </a>
                                    <div class="text d-flex py-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">Sep. 20, 2018</a></div>
                                            <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span>
                                                    3</a></div>
                                        </div>
                                        <div class="desc pl-3">
                                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no
                                                    control about the blind texts</a></h3>
                                        </div>
                                    </div>
                                </div>
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
                            slidesPerView: 3,
                            spaceBetween: 30,
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
            @endpush
