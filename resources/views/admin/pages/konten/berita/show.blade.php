@extends('admin.pages.main')



@section('content-admin')
    <style>
        .gambar {}
    </style>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $berita->judul }}</h1>
            <div
                style="height:20rem; 
                background: url({{ asset('storage/' . $berita->gambar) }}) no-repeat center ;">
            </div>
            <div>{!! $berita->isi !!}</div>
        </div>
    </div>

    <script></script>
@endsection
