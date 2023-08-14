@extends('main')
@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/bg1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Profil</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Profil RSUD Blambangan</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url(images/halamanrsud.jpg);">
	    		</div>
	    		<div class="col-md-6 ftco-animate pr-md-5 order-md-first">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tab" aria-orientation="vertical">
		              <a class="nav-link" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true"><strong>Sejarah</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="true"><strong>Maklumat</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			              	<p class="text-center">Berdiri sejak tahun 1930 sebagai Pusat Kesehatan Sederhana jaman Belanda, yang hanya melayani Pelayanan Kesehatan Dasar dan Penyakit Menular hingga sekarang berkembang menjadi Rumah Sakit Kelas B Pemerintah dan lulus Akreditasi PARIPURNA KARS 2012. </p>
                            <p class="text-center">Kini telah menjadi Pusat Rujukan Spesialis di kabupaten Banyuwangi, RSUD Blambangan selalu berbenah dalam hal pelayanan kesehatan sehingga dapat menyajikan pelayanan yang modern dan berkelas</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
			              	<p>"Dengan ini, kami seluruh penyelenggara Rumah Sakit Umum Daerah Blambangan menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang telah ditetapkan dan apabila tidak menepati janji, siap menerima sanksi sesuai peraturan perundang-undangan yang berlaku"</p>
				            </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <section class="ftco-section-2">
    	<div class="container-wrap">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img" style="background-image: url(images/vvip.jpg);">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="about-wrap">
					<h2 class="mb-2" style="color: white;">VISI</h2>
      				<div class="heading-section heading-section-white mb-5 ftco-animate text-center">
		            <p>Menjadi Rumah Sakit Andalan dan Pusat Rujukan Spesialistik yang terdepan dalam Pelayanan, Pendidikan dan Penelitian serta berorientasi pada Muyu dan Keselamatan Pasien</p>
		          </div>
                  <h2 class="mb-2" style="color: white">MISI</h2>
      				<div class="list-services d-flex ftco-animate text-center">
      					<div class="text-center">
	      					<p>Meningkatkan akses pelayanan kesehatan melalui diversifikasi layanan serta pengembangan inovasi unggulan di rumah sakit</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="text-center">
	      					<p>Meningkatkan tata kelola manajemen rumah sakit serta pemenuhan kebutuha sarana dan prasarana sesuai dengan standar pelayanan rumah sakit</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="text-center">
	      					<p>Menyelenggarakan pendidikan dan pelatihan yang berkualitas serta memfasilitasi penelitian untuk meningkatkan ilmu pengetahuan dan teknologi yang bermanfaat bagi masyarakat serta dapat dipertanggungjawabkan</p>
      					</div>
      				</div>
                    <div class="list-services d-flex ftco-animate">
      					<div class="text-center">
	      					<p>Meningkatkan ketersediaan dan mutu sumber daya manusia yang profesional, kreatif dan inovatif serta kolaboratif dalam memberikan pelayanan</p>
      					</div>
      				</div>
                    <div class="list-services d-flex ftco-animate">
      					<div class="text-center">
	      					<p>Memberikan pelayanan kesehatan rujukan yang bermutu, profesional dan paripurna sesuai standar profesi yang berorientasi pada keselamatan serta kepuasan pasien</p>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>
@endsection