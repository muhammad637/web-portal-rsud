@extends('main')
@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url({{ asset('./bg_11.webp') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Layanan</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}" style="text-shadow: 2px 2px 4px #000;">Informasi Kunjungan RSUD Blambangan</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
		
	<br>
    <h2 class="text-center" style="color: #71C9CE;"><b>INFORMASI KUNJUNGAN</b></h2>
		<section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url({{asset('images/halamanrsud.jpg')}});">
	    		</div>
	    		<div class="col-md-6 ftco-animate pr-md-5 order-md-first">
		    		<div class="row">
		          <div class="col-md-12 d-flex align-items-center">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="text-center" style="color: #71C9CE"><b>TATA TERTIB KUNJUNGAN</b></h2>
                           <ol>
                        <li>Jam Berkunjung<br><span>Pagi 07.00 - 10.00 <br>Sore 17.00 - 20.00</span></li>  
                        <li>Saat berkunjung, keluarga melepas alas kaki, mencuci tangan dengan dengan cairan pembersih tangan</li>  
                        <li>Anak berusia kurang dari 12 tahun tidak diperbolehkan masuk ke ruang perawatan</li>
                        <li>Pengunjung selalu menjaga ketertiban dan ketenangan dalam ruang perawatan</li>
                        <li>Kehilangan barang tidak menjadi tanggung jawab rumah sakit</li>
                        </ol>      
				            </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

@endsection