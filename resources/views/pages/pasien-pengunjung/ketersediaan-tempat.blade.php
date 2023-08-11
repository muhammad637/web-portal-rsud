@extends('main')
@section('content')
    <section id="ketersediaan-tempat" class="ketersediaan-tempat">

        <div class="card-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pasien & Pengunjung</a></li>

                    <li class="breadcrumb-item active" aria-current="page" style="color: #EF8F1D">Ketersediaan Tempat Tidur
                    </li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="container">
                <div class="section-header">
                    <br>
                    <p><b>KETERSEDIAAN TEMPAT TIDUR</b></p>
                    <div class="box"></div>
                    <br>
                </div>
                <div class="card-total">
                    <p class="total">Total : xxx</p>
                </div>
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">NAMA RUANGAN</th>
                            <th scope="col">KELAS</th>
                            <th scope="col">JUMLAH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td-color">Total</td>
                            <td>ALL</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td class="td-color">BANGSAL 8 LT.1</td>
                            <td>KLS1</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td class="td-color">BANGSAL 7 LT.1</td>
                            <td>KLS2</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td class="td-color">BANGSAL 6 LT.2</td>
                            <td>KLS3</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td class="td-color">BANGSAL 5 LT.2</td>
                            <td>KLS3</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td class="td-color">BANGSAL 4 LT.3</td>
                            <td>KLSVIP</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td class="td-color">BANGSAL 3 LT.3</td>
                            <td>KLSVIP</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td class="td-color">BANGSAL 2 LT.3</td>
                            <td>KLSVVIP</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td class="td-color">BANGSAL 1 LT.3</td>
                            <td>KLSVVIP</td>
                            <td>xxx</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
