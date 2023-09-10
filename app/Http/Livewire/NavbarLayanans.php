<?php

namespace App\Http\Livewire;

use App\Models\KategoriLayanan;
use Livewire\Component;

class NavbarLayanans extends Component
{
    public function render()
    {
        return view('livewire.navbar-layanans',[
            'layanans' => KategoriLayanan::all()
        ]);
    }
}
