@extends('main')
@section('content')
<section id="informasi-kunjungan" class="informasi-kunjungan">
    <div class="card-breadcrumb">
        <nav aria-label="breadcrumb">
            <br>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pasien & Pengunjung</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #EF8F1D">Informasi Kunjungan</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="container">
            <div class="section-header"> 
              <br>
              <p><b>INFORMASI KUNJUNGAN</b></p>
              <div class="box"></div>
              <br>
            </div>
            <div class="card-informasi">
                <br>
                <h5>TATA TERTIB KUNJUNGAN</h5><br> 
                <p>1. Jam Berkunjung<br><span>Pagi 07.00 - 10.00 <br>Sore 17.00 - 20.00</span></p>
                <p>2. Saat berkunjung, keluarga melepas alas kaki, mencuci tangan dengan dengan cairan pembersih tangan</p>
                <p>3. Anak berusia kurang dari 12 tahun tidak diperbolehkan masuk ke ruang perawatan</p>
                <p>4. Pengunjung selalu menjaga ketertiban dan ketenangan dalam ruang perawatan </p>
                <p>5. Kehilangan barang tidak menjadi tanggung jawab rumah sakit</p>            
            </div>
        </div>
    </div>
</section>
@endsection