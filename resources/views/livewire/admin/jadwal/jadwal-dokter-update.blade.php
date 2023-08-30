<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="mb-3">
        <label for="dokter" class="form-label">Nama Dokter</label>
        <input type="text" class="form-control" readonly value="{{ $dokter->nama }}">
    </div>
    <div class="mb-3">
        <label for="dokter" class="form-label">Hari</label>
        <select name="hari" id="" class="form-control" wire:model='hari'>
            <option value="">Pilih</option>
            @foreach ($dokter->jadwalDokter as $data)
                <option value="{{ $data->hari }}">
                    {{ $data->hari }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 row gap-2 justify-content-between">
        <div class="col-md-5">
            <label for="" class="form-label">Jam Buka layanan</label>
            <input type="time" class="form-control" name="jam_mulai_praktik" wire:model='jam_mulai_praktik'>
        </div>
        <div class="col-md-5">
            <label for="" class="form-label">Jam Tutup layanan</label>
            <input type="time" wire:model='jam_selesai_praktik' class="form-control" name="jam_selesai_praktik">
        </div>
    </div>
</div>
