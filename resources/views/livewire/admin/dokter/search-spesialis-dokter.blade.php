<div>
    <div class="mb-3">
        <div class="position-relative">
            <label for="" class="form-label">Nama Spesialis</label>
            <input wire:model="search" type="text" class="form-control" autocomplete="false" placeholder="Search..."
                name="nama_spesialis">
            @if ($results)
                <ul class="dropdown-menu  w-100"
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
</div>
