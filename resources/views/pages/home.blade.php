@extends('main')
@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg1.jpg');">
        <div class="overlay"></div>
      </div>
	  <div class="slider-item" style="background-image: url('images/bg3.jpg');">
        <div class="overlay"></div>
      </div>
	  <div class="slider-item" style="background-image: url('images/bg2.jpg');">
        <div class="overlay"></div>
      </div>
      
    </section>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-3 color-1 p-4">
<<<<<<< HEAD
    				<h3 class="mb-4">Telpon Darurat</h3>
    				<p>Hubungi nomor telfon jika anda mengalami keadaan darurat</p>
    				<span class="phone-number">(0333) 5672572</span>
    			</div>
    			<div class="col-md-3 color-2 p-4">
    				<h3 class="mb-4">Jam Operasional </h3>
    				<p class="openinghours d-flex">
    					<span>Senin - Kamis</span>
    					<span>07:00 - 14:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Jum'at</span>
    					<span>07:00 - 10:30</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Sabtu</span>
    					<span>07:00 - 12:00</span>
=======
    				<h3 class="mb-4">Telepon Darurat</h3>
    				<p>Hubungi nomor telfon jika anda mengalami keadaan darurat</p>
    				<span class="phone-number">+ (0333) 5672572</span>
    			</div>
    			<div class="col-md-3 color-2 p-4">
    				<h3 class="mb-4">Jam Operasional</h3>
    				<p class="openinghours d-flex">
    					<span>Senin - Kamis</span>
    					<span>8:00 - 15:30</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Jumat</span>
    					<span>8:00 - 15:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Sabtu - Minggu</span>
    					<span>Libur</span>
>>>>>>> 4a0116c5b26e5ac31ea82bc400771e5d5baf73b5
    				</p>
    			</div>
    			<div class="col-md-6 color-3 p-4">
    				<h3 class="mb-2">Cari Dokter</h3>
    				<form action="#" class="appointment-form">
	            <div class="row">
	            	{{-- <div class="col-sm-4">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="">Department</option>
                        <option value="">Teeth Whitening</option>
                        <option value="">Teeth CLeaning</option>
                        <option value="">Quality Brackets</option>
                        <option value="">Modern Anesthetic</option>
                      </select>
                    </div>
			            </div>
	              </div> --}}
				  
	              <div class="col-sm-12">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-user"></span></div>
			              <input type="text" class="form-control" id="appointment_name" placeholder="Name">
			            </div>
	              </div>
				  <div class="col-sm-12">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="" class="text-dark">Department</option>
                        <option value="" class="text-dark">Teeth Whitening</option>
                        <option value="" class="text-dark">Teeth CLeaning</option>
                        <option value="" class="text-dark">Quality Brackets</option>
                        <option value="" class="text-dark">Modern Anesthetic</option>
                      </select>
                    </div>
			            </div>
	              </div>
	            </div>
	            
	            <div class="form-group">
	              <input type="submit" value="Telusuri" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>
  
    <section class="ftco-section ftco-services">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2" style="color: #71C9CE;"><strong>LAYANAN UNGGULAN</strong></h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Teeth Whitening</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dental-care"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Teeth Cleaning</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-with-braces"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Quality Brackets</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-anesthesia"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Modern Anesthetic</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
      <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img" style="background-image: url(images/about-2.jpg);">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="about-wrap">
      				<div class="heading-section heading-section-white mb-5 ftco-animate">
		            <h2 class="mb-2">Dentacare with a personal touch</h2>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
		          </div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Well Experience Dentist</h3>
	      					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>High Technology Facilities</h3>
	      					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
	      					<h3>Comfortable Clinics</h3>
	      					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Meet Our Experience Dentist</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Dentist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_6.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Mark Wilson</a></h3>
      					<span class="position">Dentist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_7.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
      					<span class="position">Dentist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_8.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">System Analyst</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia</p>
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
        <div class="row  mt-5 justify-conten-center">
        	<div class="col-md-8 ftco-animate">
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut accusamus. Animi, quo. Laboriosam, laborum.</p>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-3 aside-stretch py-5">
    				<div class=" heading-section heading-section-white ftco-animate pr-md-4">
	            <h2 class="mb-3">Achievements</h2>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	          </div>
    			</div>
    			<div class="col-md-9 py-5 pl-md-5">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="14">0</strong>
		                <span>Years of Experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Qualified Dentist</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4200">0</strong>
		                <span>Happy Smiling Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="320">0</strong>
		                <span>Patients Per Year</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
	      </div>
    	</div>
    </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Testimony</h2>
            <span class="subheading">Our Happy Customer Says</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Latest Blog</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-quote">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
    				<div class="heading-section heading-section-white mb-5 ftco-animate">
	            <h2 class="mb-2">DentaCare Procedure &amp; High Quality Services</h2>
	          </div>
	          <div class="ftco-animate">
	          	<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Because there were thousands of bad Commas, wild Question Marks and devious Semikoli</p>
	          	<ul class="un-styled my-5">
	          		<li><span class="icon-check"></span>Consectetur adipisicing elit</li>
	          		<li><span class="icon-check"></span>Adipisci repellat accusamus</li>
	          		<li><span class="icon-check"></span>Tempore reprehenderit vitae</li>
	          	</ul>
	          </div>
    			</div>
    			<div class="col-md-6 py-5 pl-md-5">
    				<div class="heading-section mb-5 ftco-animate">
	            <h2 class="mb-2">Get a Free Quote</h2>
	          </div>
	          <form action="#" class="ftco-animate">
	          	<div class="row">
	          		<div class="col-md-6">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Full Name">
		              </div>
	              </div>
	              <div class="col-md-6">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Email">
		              </div>
	              </div>
	              <div class="col-md-6">
	              	<div class="form-group">
		                <input type="text" class="form-control" placeholder="Phone">
		              </div>
		            </div>
	              <div class="col-md-6">
	              	<div class="form-group">
		                <input type="text" class="form-control" placeholder="Website">
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <input type="submit" value="Get a Quote" class="btn btn-primary py-3 px-5">
		              </div>
	              </div>
              </div>
            </form>
    			</div>
    		</div>
    	</div>
    </section>
		
		<div id="map"></div>
    
  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Make an Appointment" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
@endsection
