@extends('main')
@push('link.css')
@endpush
@section('content')
<section id="dokter" class="dokter">
<div class="card">
    <div class="card-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pasien & Pengunjung</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dokter</li>
            </ol>
        </nav>
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
                      <div class="input-group mb-3" >
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
            </form>

            <div class="section-header">
                <p>Dokter</p>
            </div>

            <div class="card border-secondary mb-3">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Bedah Umum</h5>
                    <p>Jadwal Dokter</p>
                </div>
            </div>
            <div class="card-body-jadwal">
                <h5 class="card-title"></h5>
                <div class="row">
                    <div class="card">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <img src="image/dokter/dokter1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <div >
                                    <p><b>Nama Dokter</b></p>
                                    <p>Spesialis</p>
                                    </div>   
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <img src="image/dokter/dokter1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <div >
                                    <p><b>Nama Dokter</b></p>
                                    <p>Spesialis</p>
                                    </div>   
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <img src="image/dokter/dokter1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <div >
                                    <p><b>Nama Dokter</b></p>
                                    <p>Spesialis</p>
                                    </div>   
                                </div>   
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