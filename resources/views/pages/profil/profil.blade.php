@extends('main', ['title'=>'Profil RSUD'])
@section('meta')
    <meta name="description"
        content=" sebagai Pusat Kesehatan Sederhana jaman Belanda,
                                            yang hanya
                                            melayani Pelayanan Kesehatan Dasar dan Penyakit Menular hingga sekarang
                                            berkembang
                                            menjadi Rumah Sakit Kelas B Pemerintah dan lulus Akreditasi PARIPURNA KARS
                                            2012">
    <meta name="keywords" content="RSUD,Kesehatan,Rumah Sakit">
@endsection
@section('content')

@include('pages.partials.hero',['title' => 'Profil RSUD Blambangan','menu' => 'profil'])

    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image order-md-last"
                    style="background-image: url({{asset('images/halamanrsud.jpg')}});">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active font-weight-bold" id="v-pills-whatwedo-tab" data-toggle="pill"
                                    href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo"
                                    aria-selected="true">Sejarah</a>

                                <a class="nav-link font-weight-bold" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
                                    role="tab" aria-controls="v-pills-mission" aria-selected="false">Maklumat</a>
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
    </section>

    <section class="ftco-section-2">
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img home-sejarah-image" style="background-image: url('{{asset('images/bg2.webp')}}');">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="about-wrap">
                        <h2 class="mb-2" style="color: white;">VISI</h2>
                        <div class="heading-section heading-section-white mb-5 ftco-animate text-justify">
                            <p>Menjadi Rumah Sakit Andalan dan Pusat Rujukan Spesialistik yang terdepan dalam Pelayanan,
                                Pendidikan dan Penelitian serta berorientasi pada Muyu dan Keselamatan Pasien</p>
                        </div>
                        <h2 class="mb-2" style="color: white">MISI</h2>
                        <div class="list-services d-flex ftco-animate">
                            <ol>
                                <li class="mb-2">
                                    Meningkatkan akses pelayanan kesehatan melalui diversifikasi layanan serta
                                    pengembangan
                                    inovasi unggulan di rumah sakit
                                </li>
                                <li class="mb-2">
                                    Meningkatkan tata kelola manajemen rumah sakit serta pemenuhan kebutuha sarana dan
                                    prasarana sesuai dengan standar pelayanan rumah sakit
                                </li>
                                <li class="mb-2">
                                    <p>Menyelenggarakan pendidikan dan pelatihan yang berkualitas serta memfasilitasi
                                        penelitian
                                        untuk meningkatkan ilmu pengetahuan dan teknologi yang bermanfaat bagi masyarakat
                                        serta
                                        dapat dipertanggungjawabkan</p>
                                </li>
                                <li>
                                    <p>Menyelenggarakan pendidikan dan pelatihan yang berkualitas serta memfasilitasi
                                        penelitian
                                        untuk meningkatkan ilmu pengetahuan dan teknologi yang bermanfaat bagi masyarakat
                                        serta
                                        dapat dipertanggungjawabkan</p>
                                </li>
                                <li>
                                    <p>Meningkatkan ketersediaan dan mutu sumber daya manusia yang profesional, kreatif dan
                                    inovatif serta kolaboratif dalam memberikan pelayanan</p>
                                </li>
                                <li>
                                     <p>Memberikan pelayanan kesehatan rujukan yang bermutu, profesional dan paripurna sesuai
                                    standar profesi yang berorientasi pada keselamatan serta kepuasan pasien</p>
                                </li>
                            </ol>
                            <div class="text-center">
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="text-center">

                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="text-center">

                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="text-center">
                                
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="text-center">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
