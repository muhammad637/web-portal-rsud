@extends('main', ['title'=>'Informasi Tarif'] )
@section('content')

@include('pages.partials.hero',['title' => 'Tarif Pelayanan RSUD Blambangan','menu' => 'Informasi'])
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
