@extends('main', ['title'=>'Informasi Kamar'])
@section('content')
@include('pages.partials.hero',['title' => 'Jumlah Kamar RSUD Blambangan','menu' => 'pasien & pengunjung'])
    <div class="card">
        <div class="container">
         
            <table class="table table-bordered text-center">
                <thead style="background-color: #2470A0; color: white;">
                    <tr>
                        <th scope="col">NAMA RUANGAN</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">JUMLAH</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jumlah_kamar as $item)
                    @php
                     $jumlahKamar += $item->jumlah;  
                    @endphp
                    <tr>
                        <td class="td-color">{{$item->nama_ruangan}}</td>
                        <td>{{$item->kelas}}</td>
                        <td>{{$item->jumlah}}</td>
                    </tr>   
                    @endforeach  
                </tbody>
                
            </table>
  
            <div class="card-total">
                <p class="total" style="color: #169BE6">TOTAL TEMPAT TIDUR : <span class="text-dark">{{$jumlahKamar}}</span></p> 
            </div>
     
        </div>
        
    </div>
</section>
@endsection