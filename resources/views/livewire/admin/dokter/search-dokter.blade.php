<div>
    {{-- Success is as dangerous as failure. --}}
    @if ($gambarDokter)
        <img src="{{ asset('storage/' . $gambarDokter) }}" width=200 alt="" class="img-fluid d-block mb-3">
    @endif
    <label for="" class="form-label">Nama Dokter</label>
    <input type="text" class="form-control" wire:model='search' placeholder="Masukkan Nama Dokter..." required name="nama_dokter">
    @if ($results)
        <ul class="dropdown-menu {{ $displayResult ? 'd-block' : 'd-none' }}" style="max-height: 10rem;">
            @foreach ($results as $item)
                <li>
                    <a class="dropdown-item d-flex gap-2 align-items-center" href="#"
                        wire:click="selectItem('{{ $item->nama }}' , '{{ $item->gambar }}')">
                        {{ $item->nama }}
                    </a>
                </li>
            @endforeach
        </ul>

    @endif
    {{-- <ul>
            @foreach ($results as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul> --}}

</div>
