@extends('main', ['title'=>'Informasi Kunjungan'])
@section('content')
@include('pages.partials.hero',['title' => 'Informasi Kunjungan RSUD Blambangan','menu' => 'pasien & pengunjung'])
		
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