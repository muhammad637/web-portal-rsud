
<section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-image: url({{ asset('./bg_11.webp') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
                <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                    <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                            class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2">{{$menu}}</span> </p>
                    <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}"
                        style="text-shadow: 2px 2px 4px #000;">{{$title}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
