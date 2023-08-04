@extends('main')
@push('link-css')
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.css"
      integrity="sha512-xXQQj99PFpHikerkvc6HrA+dFLC14dMyBh0eL8fCan9h3n8Uhxvq5Os8ysEvn3oTLWJTte9kl5FFEftf2KfyHA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
@endpush
@section('content')
        <section class="bg-white">
      <div class="container">
        <div class="text-center p-4">
          <h4 class="text-uppercase fs-1 fw-bold color-orange-primary">
            rawat inap
          </h4>
          <div
            class="border p-1 rounded color-green"
            style="width: 16rem; margin: auto"
          ></div>
        </div>

        
      </div>
    </section>

    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div
          class="row color-orange-primary ms-auto gap-2 justify-content-center align-items-center"
        >
          <div class="col-md-6">
            <div class="mx-auto">
                <img
                  src="https://source.unsplash.com/600x300"
                  class="rounded mx-auto d-block img-fluid"
                  alt=""
                />
            </div>
          </div>
          <div class="col-md-4 bg-white" >
            <h3 class="fw-semi-bold pt-5 pb-5 darknesboy">
              Kamar VVIP
            </h3>
            <div class="darknesboy"></div>
            <h6 class="">Fasilitas Kamar :</h6>
            <ol>
              <li>Lorem, ipsum.</li>
              <li>Voluptatibus, debitis.</li>
              <li>Ad, neque.</li>
              <li>Ab, blanditiis.</li>
              <li>Expedita, exercitationem!</li>
              <li>Labore, veniam.</li>
              <li>Nostrum, labore.</li>
              <li>Consequuntur, porro.</li>
              <li>Voluptate, optio.</li>
              <li>Ex, voluptatem.</li>
            </ol>
          </div>
        </div>
        </div>
        <div class="swiper-slide"><div
          class="row color-orange-primary ms-auto gap-2 justify-content-center align-items-center"
        >
          <div class="col-md-6">
            <div class="mx-auto">
                <img
                  src="https://source.unsplash.com/600x300"
                  class="rounded mx-auto d-block img-fluid"
                  alt=""
                />
            </div>
          </div>
          <div class="col-md-4 bg-white" >
            <h3 class="fw-semi-bold text-warngin pt-5 pb-5">
              Kamar VVIP
            </h3>
            <h6 class="">Fasilitas Kamar :</h6>
            <ol>
              <li>Lorem, ipsum.</li>
              <li>Voluptatibus, debitis.</li>
              <li>Ad, neque.</li>
              <li>Ab, blanditiis.</li>
              <li>Expedita, exercitationem!</li>
              <li>Labore, veniam.</li>
              <li>Nostrum, labore.</li>
              <li>Consequuntur, porro.</li>
              <li>Voluptate, optio.</li>
              <li>Ex, voluptatem.</li>
            </ol>
          </div>
        </div></div>
        <div class="swiper-slide"><div
          class="row color-orange-primary ms-auto gap-2 justify-content-center align-items-center"
        >
          <div class="col-md-6">
            <div class="mx-auto">
                <img
                  src="https://source.unsplash.com/600x300"
                  class="rounded mx-auto d-block img-fluid"
                  alt=""
                />
            </div>
          </div>
          <div class="col-md-4 bg-white" >
            <h3 class="fw-semi-bold text-warngin pt-5 pb-5">
              Kamar VVIP
            </h3>
            <h6 class="">Fasilitas Kamar :</h6>
            <ol>
              <li>Lorem, ipsum.</li>
              <li>Voluptatibus, debitis.</li>
              <li>Ad, neque.</li>
              <li>Ab, blanditiis.</li>
              <li>Expedita, exercitationem!</li>
              <li>Labore, veniam.</li>
              <li>Nostrum, labore.</li>
              <li>Consequuntur, porro.</li>
              <li>Voluptate, optio.</li>
              <li>Ex, voluptatem.</li>
            </ol>
          </div>
        </div></div>
      </div>
      <!-- If we need pagination -->
      <div class="pt-5">
        <div class="swiper-pagination"></div>
      </div>

    </div>
@endsection
@push('link-script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
    // Optional parameters
    effect: 'coverflow',
    direction: 'horizontal',
    loop: true,
    a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
    },
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
   

});
    </script>
@endpush