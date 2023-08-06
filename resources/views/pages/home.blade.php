@extends('main')
@section('content')
    <section id="hero" class="hero d-flex align-items-center section-bg">
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
        </div>  

          <div class="cari-dokter">
            <div class="container">
            <form action="" method="">
              @csrf
                <div class="card-body">
                  <H4><b>Cari Dokter - RSUD Blambangan</b></H4>
                  <h6><b>Temukan jadwal dokter ahli, spesialis, dan berpengalaman</b></h6>
                  <br>
                  <br>
                  <div class="card-body-in">
                  <div class="row mt-4">
                    <div class="col-md-12">
                      <label for="basic-url" class="form-label">
                        <h5>Nama Dokter</h5>
                      </label>
                      <div class="input-group mb-3">
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
                            <option>Jumat</option>
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
                      <div class="col-md-12">
                      <button type="button" class="btn btn-success">Cari</button>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
              </div>
            </form>
          </div>
          <div class="layanan-home" data aos="fade-up">
          <div class="container text-center">
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
          </div>
        </div>
      </section>

      <section id="artikel" class="artikel">
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
      </section>

      {{-- <section id="profil" class="profil">
        <div class="card">
          <br>
          {{-- <div class="card-body">
            <br>
            <p>PROFIL</p>
            <br>
          </div> --}}
        </div>
      </section>


      <section id="berita" class="berita">
        <div class="card">
            <div class="container">
                
                <div class="section-header">
                <p><b>BERITA <span>TERBARU</span></b></p>
                </div>

            <div class="content">    
            <div class="row mt-4">
              
            <div class="col md-4">
            <div class="card">
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
            <div class="card" >
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
            <div class="card" >
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
