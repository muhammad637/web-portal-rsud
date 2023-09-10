@extends('main')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('{{ asset('images/bg1.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Informasi</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}"
                            style="text-shadow: 2px 2px 4px #000;">Tarif RSUD
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
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" style="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active w-25 text-center" id="v-pills-mission-tab" data-toggle="pill"
                                    href="#v-pills-mission" role="tab" aria-controls="v-pills-mission"
                                    aria-selected="false"> <strong>Tarif</strong></a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <div class="container" style="margin-top: -9rem">
        <div class="tab-content ftco-animate" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="" role="" aria-labelledby="v-pills-whatwedo-tab">
                <div class="container">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #2470A0; color: white">
                            <tr>
                                <th scope="col">Jenis Kamar</th>
                                <th scope="col">Tarif</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($tarifKamar as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tarif }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="container">
                    <table class="table table-bordered">
                        <thead class="text-center" style="background-color: #2470A0; color: white">
                            <tr>
                                <th scope="col">Nama Tindakan</th>
                                <th scope="col">Tarif</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($tarifTindakan as $item)
                                <tr>



                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tarif }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
