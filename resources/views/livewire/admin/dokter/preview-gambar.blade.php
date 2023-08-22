<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <label for="" class="form-label d-block">Gambar</label>
    @if ($image)
        <img src="{{ $image ? $image->temporaryUrl() : '' }}" alt="previewImage" class="img-fluid mb-2" width="200">
    @endif
    @if ($gambarFormEdit)
        <img src="{{ asset('storage/' . $gambarFormEdit) }}" alt="previewImage" class="img-fluid mb-2" width="200">
    @endif
    <input type="file" accept="image" name="gambar" wire:model='image' class="form-control">
</div>
