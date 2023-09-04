@extends('main')
@section('content')
    <style>
    .my-image-container > .img-center{
        max-width: 300%;
    }
    @media (max-width: 575.98px) {
        .my-image-container > .img-center{
            
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
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Alur & Persyaratan RSUD
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
                                    aria-selected="true">Alur Pendaftaran</a>

                                <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission"
                                    role="tab" aria-controls="v-pills-mission" aria-selected="false">Persyaratan</a>
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
    <div class="container" style="margin-top: -9rem">
    <div class="tab-content ftco-animate" id="v-pills-tabContent">

        <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
            <div class="container">
                <div class="my-image-container">
                    @foreach ($Alur as $item)
                        
                    <p>{{$item->nama}}</p>
                    <img src="{{$item->gambar}}" class="img-center">
                    @endforeach
                </div>

            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
            <div>
                <table class="table table-bordered">
                    <thead class="text-center" style="background-color: #2470A0; color: white">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Jenis Penjaminan</th>
                            <th scope="col">Rawat Inap</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($Persyaratan as $index => $item)
                                
                    
                            <th scope="row">{{$index + 1}}</th>
                            <td>{{$item->jenis_penjaminan}}</td>
                            <td>
                                <li>{{$item->rawat_inap}}</li>
                            </td>
                            @endforeach
                        </tr>
    
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>
@endsection
