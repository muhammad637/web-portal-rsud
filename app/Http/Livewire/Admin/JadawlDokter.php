<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class JadawlDokter extends Component
{
    public $haris = [];
    public $value;

    public function updatedValue(){
        
    }
    public function render()
    {
        return view('livewire.admin.jadawl-dokter');
    }
}
