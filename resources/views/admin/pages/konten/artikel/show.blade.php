@extends('admin.pages.main')



@section('content-admin')
<style>
        div.link>iframe.instagram-media {
            /* width: 100%; */
            height: 55rem;
            margin: auto;
        }
        div.link>iframe {
            width: 35.6rem;
            height: 20rem;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $berita->judul }}</h1>
            <div
                style="height:20rem; 
                background: url({{ asset('storage/' . $berita->gambar) }}) no-repeat center ;">
            </div>
            <div>{!! $berita->isi !!}</div>
            <div class="link mt-5 mx-auto">
                {!!$berita->link!!}
            </div>
        </div>
    </div>

    <script></script>
@endsection
