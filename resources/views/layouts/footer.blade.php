@push('lunk-css')
    @livewireStyles
@endpush
<footer class="ftco-footer ftco-bg-dark ftco-section ">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">RSUD Blambangan.</h2>
                    <p>Berdiri sejak tahun 1930 sebagai Pusat Kesehatan Sederhana jaman Belanda</p>
                </div>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                    <li class="ftco-animate"><a href="https://twitter.com/rsudblambangan"><span
                                class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a
                            href="https://www.facebook.com/people/BLAMBANGAN-PUBLIC-HOSPITAL/100064334303425/"><span
                                class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.instagram.com/rsudblambangan/"><span
                                class="icon-instagram"></span></a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Tautan</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('profil')}}" class="py-2 d-block">Profil</a></li>
                        <li><a href="{{route('pasien-dan-pengunjung.informasiKunjungan')}}" class="py-2 d-block">Pasien & Kunjungan</a></li>
                        {{-- <li><a href="#" class="py-2 d-block">Layanan</a></li> --}}
                        <li><a href="{{route('berita.index')}}" class="py-2 d-block">Artikel</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 pr-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Artikel Terbaru</h2>
                  @livewire('artikel-terbaru')
                    {{-- <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('{{ asset('images/wkwkwk.jpg') }}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">7 Manfaat Tertawa Bagi Kesehatan, Redakan .....</a>
                            </h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Agustus 12, 2023</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 59</a></div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Hubungi Kami</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Jl. Istiqlah No. 49, Kec.
                                    Banyuwangi, Kab. Banyuwangi, Jawa Timur, Indonesia 68415</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">(0333)
                                        3627289</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">rsudblambangan@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>|RSUD Blambangan. All rights reserved
                <p>Design by <span style="color: red;">Tim Pengembangan Website RSUD</span></p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>

@push('link-script')
    @livewireScripts
@endpush
