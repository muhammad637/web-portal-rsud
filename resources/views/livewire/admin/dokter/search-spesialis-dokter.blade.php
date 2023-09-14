@push('link-css-admin')
@endpush
<div>
    <div class="mb-3">
        <label for="tipe_dokter" class="form-label">Tipe Dokter</label>
        <select name="tipe_dokter" id="tipe_dokter" class="form-control" wire:model='tipe_dokter'>
            <option value="">Pilih Tipe Dokter</option>
            <option value="umum">Dokter Umum</option>
            <option value="spesialis">Dokter Spesialis</option>
        </select>
    </div>
    <div class="mb-3 {{ $tipe_dokter == 'spesialis' ? 'd-block' : 'd-none' }}">
        <div class="position-relative">
            <label for="" class="form-label">Nama Spesialis</label>
            <input wire:model="search" type="text" class="form-control" autocomplete="false" placeholder="Search..."
                name="nama_spesialis" {{ $tipe_dokter == 'spesialis' ? 'required' : '' }}>
            @if ($results)
                <ul class="dropdown-menu w-100"
                    style="display: {{ $displayResult ? 'block' : 'none' }};  max-height:10rem; overflow:auto;">
                    @foreach ($results as $result)
                        <li>
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#"
                                wire:click="selectItem('{{ $result->nama_spesialis }}')">
                                {{ $result->nama_spesialis }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    {{ $search }}
</div>
@push('link-script-admin')
@endpush
