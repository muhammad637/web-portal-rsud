@extends('main')
@section('content')
    <style>
        .my-image-container>.img-center {
            max-width: 300%;
        }

        @media (max-width: 575.98px) {
            .my-image-container>.img-center {

                max-width: 100%;
            }
        }
    </style>
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('images/bg1.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="index.html">Home</a></span> <span>Informasi</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Petunjuk Umum RSUD
                            Blambangan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill"
                                    href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo"
                                    aria-selected="true">Tata Tertib</a>

                                <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
                                    role="tab" aria-controls="v-pills-mission" aria-selected="false">Kewajiban & Hak</a>
                                <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission-kles"
                                    role="tab" aria-controls="v-pills-mission" aria-selected="false">Kontak Penting</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">




                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <div class="container mb-5" style="margin-top: -9rem;">
        <div class="tab-content ftco-animate" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel"
                aria-labelledby="v-pills-whatwedo-tab">
                <div class="container">
                    <div class="my-image-container">
                        <img src="images/tata-tertib.png" class="img-center">
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="petunjuk-umum">
                                <div class="row align-items-center">
                                    <div class="col-md-2 col-lg-2  col-6">
                                        <div class="img mb-4" style="background-image: url(images/pdf.png);">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="info">
                                            <h3>Undang-Undang Republik Indonesia Nomor 44 Tahun 2009 Tentang Rumah Sakit
                                            </h3>
                                            <span class="position">Ukuran 177 KB</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="petunjuk-umum">
                                <div class="row align-items-center">
                                    <div class="col-md-2 col-lg-2  col-6">
                                        <div class="img mb-4" style="background-image: url(images/pdf.png);">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="info">
                                            <h3>Hak, Kewajiban dan Tanggung Jawab Serta Tata Tertib Rumah Sakitt</h3>
                                            <span class="position">Ukuran 10,4 KB</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="v-pills-mission-kles" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                <div>
                    <div class="container">
                        <table class="table table-bordered">
                            <thead class="text-center" style="background-color: #2470A0; color: white">
                                <tr>
                                    <th scope="col">Instalasi</th>
                                    <th scope="col">Kontak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                 
                                    <td>Instalasi Promosi Kesehatan Rumah Sakit (PKRS)</td>
                                    <td>
                                        <li>Telepon : (0333) 26372819</li>
                                        <li>Email : rsudblambangan@gmail.com</li>
                                        <li>Website : www.rsudblambangan.co.id</li>
                                        <li>Facebook : rsudblambangan</li>
                                        <li>Instagram :@rsudblambangan</li>
                                        <li>Twitter : @rsudblambangan</li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Instalasi Gawat Darurat (IGD) 24 Jam</td>
                                    <td>sdr.i Susi  (031) 829366</td>
                                </tr>
                                <tr>
                                    <td>Instalasi Rawat Jalan (Jam Kerja)</td>
                                    <td>sdr.i Dewi  (031) 829366</td>
                                </tr>
                                <tr>
                                    <td>Pengaduan Publik (Jam Kerja)</td>
                                    <td>(031) 829366</td>
                                </tr>
                                <tr>
                                    <td>Hotsline BPJS</td>
                                    <td>(031) 829366</td>
                                </tr>
            
                            </tbody>
                        </table>
        
                    </div>
                </div>

            </div>
            <div class="tab-pane fade show " id="v-pills-whatwedo" role="tabpanel"
            aria-labelledby="v-pills-whatwedo-tab">
            <div class="container">
                <table class="table table-bordered">
                    <thead class="text-center" style="background-color: #2470A0; color: white">
                        <tr>
                            <th scope="col">Jenis Kamar</th>
                            <th scope="col">Tarif</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                         
                            <td>Kelas I</td>
                            <td>Rp. 525.000,00</td>
                        </tr>
                        <tr>
                            <td>Kelas II</td>
                            <td>Rp. 360.000,00</td>
                        </tr>
                        <tr>
                            <td>Kelas III</td>
                            <td>Rp. 300.000,00</td>
                        </tr>
                        <tr>
                            <td>Utama I</td>
                            <td>Rp. 750.000,00</td>
                        </tr>
    
                    </tbody>
                </table>

            </div>
        </div>
        </div>
    </div>
@endsection