<?php

namespace App\Http\Livewire\Admin\Dokter;

use Livewire\Component;
use Livewire\WithFileUploads;

class PreviewGambar extends Component
{
    use WithFileUploads;
    public $user  = 'tes';
    public $gambarFormEdit;
    public $image;
    public function render()
    {
        return view('livewire.admin.dokter.preview-gambar');
    }

    public function updatedImage(){
        $this->gambarFormEdit = null;
    }
}
