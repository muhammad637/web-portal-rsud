<?php

namespace App\Http\Livewire;

use App\Models\Konten;
use Livewire\Component;

class ArtikelTerbaru extends Component
{
    public function render()
    {
        $artikel = Konten::orderBy('updated_at','desc')->get();
        return view('livewire.artikel-terbaru',[
            'artikel' => $artikel
        ]);
    }
}
