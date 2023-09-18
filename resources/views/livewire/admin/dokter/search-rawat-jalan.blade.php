<div>
    <div class="mb-3">
        <div class="position-relative">
            <label for="" class="form-label">Pilih Poli / Klinik</label>
            <input wire:model="search" type="text" class="form-control" autocomplete="false" name="nama_rawat_jalan"
                placeholder="cari poli / klinik">
            {{ $search }}
            <div class="row my-2">
                @foreach ($layanan as $item)
                    @if (empty($search))
                        <div class="col-md-4">
                            <input type="checkbox" name="rawatJalan[]" id="{{ $item->id }}"
                                value="{{ $item->id }}" @if (in_array($item->id, $layanan_id)) checked @endif>
                            <label for="{{ $item->id }}">{{ $item->nama }}</label>
                        </div>
                    @else
                        <div
                            class="col-md-4 {{ strpos(strtolower($item->nama), strtolower($search)) !== false ? 'd-block' : 'd-none' }}">
                            <input type="checkbox" name="rawatJalan[]" id="{{ $item->id }}"
                                value="{{ $item->id }}" @if (in_array($item->id, $layanan_id)) checked @endif>
                            <label for="{{ $item->id }}">{{ $item->nama }}</label>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
