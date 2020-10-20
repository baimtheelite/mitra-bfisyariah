<?php

namespace App\View\Components;

use Illuminate\View\Component;

class paketTrip extends Component
{
    public $judul;
    public $keterangan;
    public $gambar;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($judul, $keterangan, $gambar)
    {
        $this->judul = $judul;
        $this->keterangan = $keterangan;
        $this->gambar = $gambar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.paket-trip');
    }
}
