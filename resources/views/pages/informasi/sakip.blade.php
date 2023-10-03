@extends('main', ['title'=>'Informasi SAKIP'])
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
    @include('pages.partials.hero',['title' => 'SAKIP RSUD Blambangan','menu' => 'Informasi'])

    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">

                                <a class="nav-link active" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
                                    role="tab" aria-controls="v-pills-mission" aria-selected="false">SAKIP</a>
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
                        @foreach ($sakip as $item)
                        <div class="col-md-6">
                            <a href="{{$item->link_file}}" target="_blank">
                            <div class="petunjuk-umum">
                                <div class="row align-items-center">
                                    <div class="col-md-2 col-lg-2  col-6">
                                        <div class="img mb-4 d-inline-block"  style="background-image: url('{{ asset('images/pdf.png') }}');">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="info">
                                            <h3>{{$item->nama}}
                                            </h3>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
@endsection
