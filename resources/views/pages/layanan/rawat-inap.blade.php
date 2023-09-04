@extends('main')
@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/bg1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Layanan</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Kamar Rawat Inap</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
				@foreach ($RawatInap as $item)
					
			
	    		<div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url({{$item->gambar}});">
	    		</div>
	    		<div class="col-md-6 ftco-animate pr-md-5 order-md-first">
		    		<div class="row">
		          <div class="col-md-12 d-flex align-items-center">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-2" style="color: #71C9CE"><b>{{$item->nama}}</b></h2>
			              	<p>{!!$item->deskripsi!!}</p>
				            </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
			  @endforeach
		    </div>

    	</div>
    </section>
@endsection
