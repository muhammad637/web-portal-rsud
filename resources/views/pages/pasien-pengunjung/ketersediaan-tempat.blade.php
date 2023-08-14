@extends('main')
@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/bg1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Beranda</a></span><span>PASIEN & PENGUNJUNG</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Ketersediaan Kamar Tidur</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="card">
        <div class="container">
            <br>
            <div class="card-total">
                <p class="total" style="color: #169BE6">TOTAL TEMPAT TIDUR : <span class="text-dark">1.766</span></p> 
            </div>
            <br>
        <table class="table table-bordered text-center">
            <thead style="background-color: #2470A0; color: white;">
                <tr>
                    <th scope="col">NAMA RUANGAN</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">JUMLAH</th>
                </tr>
            </thead>
            <tbody>
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