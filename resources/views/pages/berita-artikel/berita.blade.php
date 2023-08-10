@extends('main')
@section('content')
<section id="berita" class="berita">
<div class="card-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Berita & Artikel Kesehatan</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #EF8F1D" >Berita</li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
                <div class="d-flex">
                    <img src="image/berita/berita1.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="image/berita/berita1.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="image/berita/berita2.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="image/berita/berita3.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

            
            <div class="page">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"  style="color: #1AA51F">&laquo;</span>
                            </a></li>
                            <li class="page-item active" aria-current="page" style="color: #1AA51F">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#"  style="color: #1AA51F">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"  style="color: #1AA51F">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"  style="color: #1AA51F">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    </div>
</section>
@endsection