@extends('main')
@section('content')
@include('pages.partials.hero',['title' => 'Kumpulan Artikel RSUD Blambangan','menu' => 'Artikel'])
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry">
                                @foreach ($konten as $item)
                                    <div class="block-20"
                                        style="background-image: url('{{ asset('storage/' . $item->gambar) }}');">
                                    </div>
                                    <div class="text d-flex py-4">
                                        <div class="meta mb-3">
                                            <div>
                                                {{ Carbon\Carbon::parse($item->created_at)->format('d-m-y') }}</div>
                                            <div>Admin</div>
                                        </div>
                                        <div class=" pl-sm-3 pl-md-5 deskripsi">
                                            <h3 class="heading">{{ $item->judul }}
                                            </h3>
                                            <p><a href="{{ route('berita.show', ['konten' => $item->slug]) }}"
                                                    class="btn btn-primary btn-outline-primary">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            {{ $konten->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div> <!-- END: col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Kategori</h3>
                            @foreach ($kategoriKonten as $value)
                                <li><a href="{{ route('kategori-berita.index', ['kategoriKonten' => $value->slug]) }}"
                                        class="text-dark">{{ $value->nama }}
                                        <span>({{ count($value->konten) }})</span>
                                    </a></li>
                            @endforeach
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Berita Terbaru</h3>
                        @foreach ($kontenTerbaru as $item)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url('{{ asset('storage/' . $item->gambar) }}');"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">{{ $item->judul }}
                                        </a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span>
                                                {{ Carbon\Carbon::parse($item->created_at)->format('d-m-y') }} </a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
@endsection
@push('link-script')
    <script>
       let deskripsis = document.querySelectorAll("h3.heading");
            deskripsis.forEach((content) => {
                // console.log(content.children[0])
                // const text = content.children[0].textContent;
                const text = content.textContent;
                const words = text.split(" ");
                console.log(words)
                // const trunc = words.slice(0,10).join(' ');
                if (words.length > 10) {
                //   content.textContent = trunc +"....";
                  console.log(words.length)
                }
            });
    </script>
@endpush
