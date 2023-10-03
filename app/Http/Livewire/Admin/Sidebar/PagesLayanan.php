<?php

namespace App\Http\Livewire\Admin\Sidebar;

use App\Models\KategoriLayanan;
use Livewire\Component;

class PagesLayanan extends Component
{
    public $layanan = [];
    public function render()
    {
        $layanan = KategoriLayanan::orderBy('nama', 'desc')->get();
        return view('livewire.admin.sidebar.pages-layanan', [
            'layananKategori' => $layanan
        ]);
    }
}
