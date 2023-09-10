<div>
    {{-- Success is as dangerous as failure. --}}
    @foreach ($layanans as $item)
          <li><a class="dropdown-item" href="{{route('layanan.index',['kategoriLayanan' => $item->slug])}}">{{$item->nama}}</a></li>
    @endforeach
</div>
