<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @if (count($artikel))
        @foreach ($artikel as $item)
            <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ asset('images/wkwkwk.jpg') }}');"></a>
                <div class="text">
                    <h3 class="heading"><a href="#">{{ $item->nama }}</a>
                    </h3>
                    <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span>
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d, M Y') }}</a></div>
                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
