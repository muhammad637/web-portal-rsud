{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="icon"><span class="icon-user"></span></div>
            <input type="text" class="form-control" wire:model='search' placeholder="Masukkan Nama Poli / Klinik ..."
                name="nama_dokter">
            @if ($results)
                <ul class="dropdown-menu {{ $displayResult ? 'd-block' : 'd-none' }}"
                    style="max-height: 10rem; overflow:auto; max-width:100%;">
                    @foreach ($results as $item)
                            <li>
                                <a class="dropdown-item d-flex gap-2 align-items-center" href="#"
                                    wire:click="selectItem('{{ $item->nama }}')">
                                    {{ $item->RawatJalan->nama }} - {{ $item->nama }}
                                </a>
                            </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <div class="select-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="spesialis_id" id="" class="form-select form-control" aria-placeholder="Spesialis" wire:model="spesialis_id">
                    <option value="" class="text-dark">Pilih Spesialis</option>
                    @foreach ($Spesialis as $spesialis)
                        <option value="{{ $spesialis->id }}" class="text-dark">{{ $spesialis->nama_spesialis }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
