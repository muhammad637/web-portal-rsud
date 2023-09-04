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
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">IKM RSUD
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

                                <a class="nav-link active" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
                                    role="tab" aria-controls="v-pills-mission" aria-selected="false">Index Kepuasan Masyarakat</a>
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
            <div class="tab-pane active" id="v-pills-mission" role="" aria-labelledby="v-pills-mission-tab">
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="petunjuk-umum">
                                <div class="row align-items-center">
                                    @foreach ($ikm as $item)
                                    <div class="col-md-2 col-lg-2  col-6">
                                        <a class="img mb-4 d-inline-block" href="storage/{{$item->pdf}}" style="background-image: url(images/pdf.png);">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <div class="info">
                                            <h3>{{$item->nama}}
                                            </h3>
                                            <span class="position">Ukuran 16,9 KB</span>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
@endsection
