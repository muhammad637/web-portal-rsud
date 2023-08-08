@extends('main')
@section('content')

@push('link-css')
  <link rel="stylesheet" href="{{asset('css/home/style.css')}}">
  <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.css"
            integrity="sha512-xXQQj99PFpHikerkvc6HrA+dFLC14dMyBh0eL8fCan9h3n8Uhxvq5Os8ysEvn3oTLWJTte9kl5FFEftf2KfyHA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
@endpush
    {{-- <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="card">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/hero/hero1.jpg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/hero/hero2.jpg"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/hero/hero3.jpg"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        {{-- </div>   --}}

          
          {{-- <div class="layanan-home" data aos="fade-up"> --}}
            
          
          {{-- <div class="container text-center">
            <div class="section-header">
              <br>
              <p><b>LAYANAN <span>UNGGULAN RSUD BLAMBANGAN</span></b></p>
            </div>
            <br>
            <div class="row mt-4">
              <div class="col-md-4 layanan-item">
                <img src="image/layanan/layanan1.jpg" class="layanan-img img-fluid" alt="">
                <p class="nama"><b>MEDICAL CHECKUP</b></p>
              </div>
              <div class="col-md-4 layanan-item">
                <img src="image/layanan/layanan2.png" class="layanan-img img-fluid" alt="">
                <p class="nama"><b>IGD</b></p>
              </div>
              <div class="col-md-4 layanan-item">
                <img src="image/layanan/layanan3.jpg" class="layanan-img img-fluid" alt="">
                <p class="nama"><b>RSUD DENTAL CLINIC</b></p>
              </div>

            </div>
            </div>
          </div> --}}
        {{-- </div> --}}
      {{-- </section> --}}

      {{-- <section id="artikel" class="artikel">
        <div class="card">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <br>
              <p><b>ARTIKEL <span>KESEHATAN</span></b></p>
              <br>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 artikel">
                    <img src="image/artikel/artikel1.jpg" class="artikel-img img-fluid" alt="">
                    <p class="judul-artikel"><b>Judul Artikel</b></p>
                </div>
                <div class="col-md-4 artikel">
                    <img src="image/artikel/artikel2.jpg" class="artikel-img img-fluid" alt="">
                    <p class="judul-artikel"><b>Judul Artikel</b></p>
                </div>
                <div class="col-md-4 artikel">
                    <img src="image/artikel/artikel3.jpg" class="artikel-img img-fluid" alt="">
                    <p class="judul-artikel"><b>Judul Artikel</b></p>
                </div>
                <div class="button">
                <div class="col-md-12">
                      <button type="button" class="btn btn-success">Lihat Lebih Banyak</button>
                      </div>
                </div>
            </div>           
          </div>
        </div>
      </section> --}}

      {{-- <section id="profil" class="profil">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                            <a class="p-1 rounded" href="#profil">Profil</a>
                            <a class="p-1 rounded" href="#visi-misi">Visi & Misi</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                            <h4 id="profil">Profil</h4>
                            <p>Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod tenpor incidunt ut labore et dolore nagna aliqua. Ut enin ad ninin venian, quis nostrun exercitationen ullan corporis suscipit laboriosan, nisi ut aliquid ex ea connodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillun dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt nollit anin id est laborun.</p>
                            <h4 id="visi-misi">Visi & Misi</h4>
                            <p>Visi : Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod tenpor incidunt ut labore et dolore nagna aliqua. Ut enin ad ninin venian, quis nostrun exercitationen ullan corporis suscipit laboriosan, nisi ut aliquid ex ea connodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillun dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt nollit anin id est laborun.</p>
                        </div>
                    </div>
                </div>
          </div>

        </div>
      </section> --}}

      {{-- <section id="berita" class="berita">
        <div class="card">
            <div class="container">
                
                <div class="section-header">
                <p><b>BERITA <span>TERBARU</span></b></p>
                </div>

            <div class="content">    
            <div class="row mt-4">
            <div class="col md-4">
            <div class="card" style="width: 18rem;">
                <img src="image/berita/berita1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="tanggal-artikel">13 Juli 2023</p>
                    <h5 class="judul-artikel">oren ipsun dolor sit anet, consectetur adipisci elit,</h5>
                    <br>
                    <a href="#" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
            </div>
            <div class="col md-4">
            <div class="card" style="width: 18rem;">
                <img src="image/berita/berita2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="tanggal-artikel">13 Juli 2023</p>
                    <h5 class="judul-artikel">Loren ipsun dolor sit anet,</h5>
                    <br>
                    <a href="#" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
            </div>
            <div class="col md-4">
            <div class="card" style="width: 18rem;">
                <img src="image/berita/berita3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="tanggal-artikel">13 Juli 2023</p>
                    <h5 class="judul-artikel">Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod</h5>
                    <br>
                    <a href="#" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
            </div>

            </div>
            </div>
            </div>
           
    </div>
    </section> --}}
     <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img
                        src="image/hero/hero1.jpg"
                        alt=""
                       
                    />
                </div>
                <div class="swiper-slide">
                    <img src="image/hero/hero2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="image/hero/hero3.jpg" alt="" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- form-cari-dokter -->
        <div class="card w-75 mx-auto kotak1 w-sm-100" style="background-color: #EF8F1D;">
            <div class="card-body">
                <h5 class="card-title text-center">Cari Dokter - RSUD Blambangan</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary text-center">
                  Temukan jadwal dokter ahli, spesialis, dan berpengalaman
                </h6>
               <div class="card-body-in p-3" style="background-color: #F69F39;">
                <div class="row mt-4">
                  <div class="col-md-12">
                    <label for="basic-url" class="form-label">
                      <h5>Nama Dokter</h5>
                    </label>
                    <div class="input-group-mb-3">
                      <input required type="text" class="form-control">
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-4">
                      <label for="basic-url" class="form-label">
                        <h5>Hari</h5>
                      </label>
                      <div class="input-group mb-3">
                        <select id="cari-hari" class="form-select">
                          <option>Senin</option>
                          <option>Selasa</option>
                          <option>Rabu</option>
                          <option>Kamis</option>
                          <option>Jum'at</option>
                          <option>Sabtu</option>
                        </select>
                      </div>
                      
                    </div>
                    <div class="col-md-4">
                      <label for="basic-url" class="form-label">
                        <h5>Jam</h5>
                      </label>
                      <div class="input-group mb-3">
                        <input required type="time" class="form-control" name="jam">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="basic-url" class="form-label">
                        <h5>Spesialis</h5>
                      </label>
                      <div class="input-group mb-3">
                        <select id="spesialis" class="form-select">
                          <option> Bedah Umum</option>
                        </select>
                      </div>
                      
                  </div>
                  </div>
                  <div class="col-md-12">
                    <button type="button" class="btn btn-success" style="width: 100%">Cari</button>
                    </div>
                </div>
               </div>
            </div>
        </div>

        <!-- end form-cari-dokter -->
        {{-- layanan unggulan --}}
        <div class="layanan-home" data aos="fade-up">
          <div class="container text-center">
            <div class="section-header">
              <p><b>LAYANAN <span>UNGGULAN RSUD BLAMBANGAN</span></b></p>
            </div>
            <br>
          </div>
        </div>
        <div class="container">
          
          <div class="card" style="border: none">
              <div class="row align-items-center">
                <div class="col-md-4 my-1">
                  <div class="card" style="border: none">
                      <div class="overflow-hidden" style="height: 15rem">
                          <img
                              src="../image/artikel/artikel1.jpg"
                              alt=""
                              class="img-fluid object-fit-cover"
                          />
                      </div>
                      <div class="text-center">
                        <h3 class="card-judul">
                          Lorem, ipsum dolor sit amet consectetur
                          adipisicing elit. Nulla in dolorum doloribus
                          dolore sit ipsam cum distinctio provident
                          aspernatur consequuntur?
                      </h3>
                      </div>
                  </div>
              </div>
                  <div class="col-md-4 my-1">
                      <div class="card" style="border: none">
                          <div class="overflow-hidden" style="height: 15rem">
                              <img
                                  src="../image/artikel/artikel1.jpg"
                                  alt=""
                                  class="img-fluid object-fit-cover"
                              />
                          </div>
                          <div class="text-center">
                            <h3 class="card-judul">
                              Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Nulla in dolorum doloribus
                              dolore sit ipsam cum distinctio provident
                              aspernatur consequuntur?
                          </h3>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="card" style="border: none">
                          <div
                              class="position-relative overflow-hidden"
                              style="height: 15rem"
                          >
                              <img
                                  src="https://source.unsplash.com/400x800"
                                  alt=""
                                  class="object-fit-cover"
                              />
                              <div
                                  class="position-absolute top-10 start-50 z-10 card-title text-warning"
                              >
                                  Lorem, ipsum dolor sit amet consectetur
                                  adipisicing elit. Nulla in dolorum doloribus
                                  dolore sit ipsam cum distinctio provident
                                  aspernatur consequuntur?
                              </div>
                          </div>
                          <div class="text-center">
                            <h3 class="card-judul">
                              Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Nulla in dolorum doloribus
                              dolore sit ipsam cum distinctio provident
                              aspernatur consequuntur?
                          </h3>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>
        {{-- end layanan unggulan --}}

        <!-- artikel --> 
        <div class="artikel my-5" data aos="fade-up">
          <div class="container text-center">
            <div class="section-header">
              <p><b>ARTIKEL <span>KESEHATAN</span></b></p>
            </div>
            <br>
          </div>
        </div>
        <div class="container">
          
            <div class="card" style="border: none">
                <div class="row align-items-center">
                  <div class="col-md-4 my-1">
                    <div class="card" style="border: none">
                        <div class="overflow-hidden" style="height: 15rem">
                            <img
                                src="../image/artikel/artikel1.jpg"
                                alt=""
                                class="img-fluid object-fit-cover"
                            />
                        </div>
                        <div class="text-center">
                          <h3 class="card-judul">
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Nulla in dolorum doloribus
                            dolore sit ipsam cum distinctio provident
                            aspernatur consequuntur?
                        </h3>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4 my-1">
                        <div class="card" style="border: none">
                            <div class="overflow-hidden" style="height: 15rem">
                                <img
                                    src="../image/artikel/artikel1.jpg"
                                    alt=""
                                    class="img-fluid object-fit-cover"
                                />
                            </div>
                            <div class="text-center">
                              <h3 class="card-judul">
                                Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Nulla in dolorum doloribus
                                dolore sit ipsam cum distinctio provident
                                aspernatur consequuntur?
                            </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="border: none">
                            <div
                                class="position-relative overflow-hidden"
                                style="height: 15rem">
                                <img
                                    src="https://source.unsplash.com/400x800"
                                    alt=""
                                    class="object-fit-cover"
                                />
                                <div
                                    class="position-absolute top-10 start-50 z-10 card-title text-warning">
                                    Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Nulla in dolorum doloribus
                                    dolore sit ipsam cum distinctio provident
                                    aspernatur consequuntur?
                                </div>
                            </div>
                            <div class="text-center">
                              <h3 class="card-judul">
                                Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Nulla in dolorum doloribus
                                dolore sit ipsam cum distinctio provident
                                aspernatur consequuntur?
                            </h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button my-5"> 
          <button type="button" class="btn btn-success d-block mx-auto w-25">Lihat Lebih Banyak</button>
        </div>
        <!-- end artikel -->
        {{-- Profil & Visi Misi --}}
        <div class="card   w-75  mx-auto w-sm-100 my-2" style="background-color: #FFE9D0;">
          <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                      <button type="myButton" id="btnprofil" class="btn w-50 mx-auto" style="color: #6F6F6F;">Profil</button>
                      <button type="myButton2" id="btnvisi" class="btn w-50 mx-auto mt-3" style="color: #6F6F6F;">Visi & Misi</button>
                    </div>
                </div>
                <div class="col-8">
                    <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                      <div class="profil" id="profile" >
                        <h4>Profil</h4>
                        <p>Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod tenpor incidunt ut labore et dolore nagna aliqua. Ut enin ad ninin venian, quis nostrun exercitationen ullan corporis suscipit laboriosan, nisi ut aliquid ex ea connodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillun dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt nollit anin id est laborun.</p>
                      </div>
                      <div class="visi" id="text-visi" style="display: none;">
                        <h4>Visi dan Misi</h4>
                        <p>Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod tenpor incidunt ut labore et dolore nagna aliqua. Ut enin ad ninin venian, quis nostrun exercitationen ullan corporis suscipit laboriosan, nisi ut aliquid ex ea connodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillun dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt nollit anin id est laborun.</p>
                      </div>
                        
                       
                    </div>
                </div>
            </div>
      </div>
      </div>
      {{-- Berita Terbaru --}}
      <div class="berita" data aos="fade-up">
        <div class="container text-center">
          <div class="section-header">
            <p><b>BERITA <span>TERBARU</span></b></p>
          </div>
          <br>
        </div>
      </div>
      <section id="berita" class="berita">
            <div class="content">    
            <div class="row mt-5 ms-auto">
            <div class="col md-5 ms-5">
            <div class="card" style="width: 18rem; border:none;">
                <img src="image/berita/berita1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="tanggal-artikel">13 Juli 2023</p>
                    <h5 class="judul-artikel">oren ipsun dolor sit anet, consectetur adipisci elit,</h5>
                    <br>
                    <a href="#" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
            </div>
            <div class="col md-4">
            <div class="card" style="width: 18rem; border:none;">
                <img src="image/berita/berita2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="tanggal-artikel">13 Juli 2023</p>
                    <h5 class="judul-artikel">Loren ipsun dolor sit anet,</h5>
                    <br>
                    <a href="#" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
            </div>
            <div class="col md-4">
            <div class="card" style="width: 18rem; border:none;">
                <img src="image/berita/berita3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="tanggal-artikel">13 Juli 2023</p>
                    <h5 class="judul-artikel">Loren ipsun dolor sit anet, consectetur adipisci elit, sed eiusnod</h5>
                    <br>
                    <a href="#" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
            </div>

            </div>
            </div>
            </div>
           
    </div>
    </section>
@endsection
@push('link-script')
<script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"
        ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const cardTitles = document.querySelectorAll(".card-judul");
                const maxTitleLength = 100; // Jumlah karakter maksimum yang ingin ditampilkan

                cardTitles.forEach((title) => {
                    let text = title.textContent;
                    if (text.length > maxTitleLength) {
                        title.textContent =
                            text.substring(0, maxTitleLength - 3) + "...";
                    }
                });
            });

            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        </script>
        <script>
          const myButton = document.getElementById("btnprofil");
          
          myButton.addEventListener("click", function() {
            myButton.classList.toggle("btn-warning");
          });
          </script>
          <script>
            const myButton2 = document.getElementById("btnvisi");

            myButton2.addEventListener("click", function(){
              myButton2.classList.toggle("btn-warning");
            });
          </script>
           <script>
            const btnprofil = document.getElementById("btnprofil");
            const btnvisi = document.getElementById("btnvisi");
            const contentArea = document.getElementById("contentArea");
            const contentprofile = document.getElementById("profile");
            const contentvisi = document.getElementById("text-visi");
            
            btnprofil.addEventListener("click", function() {
              contentprofile.style.display = "block"
              contentvisi.style.display = "none"
            });
        
           btnvisi.addEventListener("click", function() {
              contentprofile.style.display = "none"
              contentvisi.style.display = "block"
            });
        
          </script>
@endpush