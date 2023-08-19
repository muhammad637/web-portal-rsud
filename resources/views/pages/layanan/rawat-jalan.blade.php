@extends('main')
@push('link-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        .container-swiper {
            height: 20rem;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush
@section('content')
<section class="home-slider owl-carousel">
	<div class="slider-item bread-item" style="background-image: url('images/bg1.jpg');" data-stellar-background-ratio="0.5">
	  <div class="overlay"></div>
	  <div class="container" data-scrollax-parent="true">
		<div class="row slider-text align-items-end">
		  <div class="col-md-7 col-sm-12 ftco-animate mb-5">
			<p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Layanan</span></p>
			<h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Layanan Rawat Jalan</h1>
		  </div>
		</div>
	  </div>
	</div>
  </section>
    {{-- layanan rawat jalan --}}
	<h2 class="text-center mt-5" style="color: #71C9CE;"><b>LAYANAN RAWAT JALAN</b></h2>
	<section class="ftco-section" style="background-color: #7BCECC33">
	<div class="container">
		<div class="row d-md-flex">
			<div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url(images/halamanrsud.jpg);">
			</div>
			<div class="col-md-6 ftco-animate pr-md-5 order-md-first">
				<div class="row">
			  <div class="col-md-12 d-flex align-items-center">

				  <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
					  <div class="content" style="font-size: 16px;">
						  <p>
							"Rawat jalan" adalah istilah yang digunakan dalam dunia medis untuk menggambarkan jenis perawatan kesehatan di mana pasien menerima perawatan atau pengobatan di luar rumah sakit atau fasilitas perawatan inap. Dalam pengobatan rawat jalan, pasien datang ke fasilitas medis, seperti klinik atau pusat perawatan, untuk menerima pemeriksaan, pengobatan, atau tindakan medis tertentu, dan kemudian pulang ke rumah pada hari yang sama.Rawat jalan sering kali lebih praktis dan ekonomis daripada rawat inap di rumah sakit. Ini juga cocok untuk kasus yang tidak memerlukan perawatan intensif atau pemantauan berkelanjutan. Namun, jenis perawatan yang paling tepat akan tergantung pada kondisi medis dan rekomendasi dari tenaga medis yang berwenang.Penting untuk berkonsultasi dengan dokter atau tenaga medis yang kompeten untuk menentukan apakah rawat jalan cocok untuk kondisi medis tertentu dan untuk mendapatkan panduan yang tepat mengenai perawatan yang diperlukan.</p>
						
						</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
    </section>
<div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <h2 class="mt-5" style=><strong>POLI RAWAT JALAN</strong></h2>
                </div>
            </div>
            <div class="container-swiper">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="{{ 'images/poli/anak.png' }}" alt="" style="width: 50%; height: 50%;">
                                        {{-- <span class="flaticon-tooth-1"></span> --}}
                                    </div>
                                    <div class="media-body p-2 mt-5">
                                        <h3 class="heading">POLI UMUM</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/gigi.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Gigi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/jantung.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Jantung</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/mata.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Mata</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/pregnant.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Obgyn</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/🦆 icon _Lungs_.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli TB-RO</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Healthy Eating.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Gizi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/bedah.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Bedah</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Neuron.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Syaraf Bedah</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Collaboration Female Male.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Psikologi</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Head Profile.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli THT</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/🦆 icon _cancer ribbon_.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Bedah Onkologi</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Denture.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli SP. PENYAKIT MULUT</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Stomach.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Bedah Urologi</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Tooth.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Gigi Sp. Anak</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/AIDS Ribbon.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli VCT</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Doctor Female.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli UMUM</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Acupuncture.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Kulit & Kelamin</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/poli dalam.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Dalam</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Lungs.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Paru</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Physical Therapy.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Rehab Medik</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Checkweigher.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Anestasi</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/🦆 icon _Lungs_2.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli TB-Dots</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services d-block text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <img src="images/poli/Head With Brain.png" alt="" style="width: 50%; height:50%;">
                                    </div>
                                    <div class="media-body p-2 mt-3">
                                        <h3 class="heading">Poli Jiwa</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
@endsection

@push('link-script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".mySwiper", {
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        // spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                },
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        })
    </script>
@endpush