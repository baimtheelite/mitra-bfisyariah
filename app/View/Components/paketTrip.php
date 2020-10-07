<?php

namespace App\View\Components;

use Illuminate\View\Component;

class paketTrip extends Component
{
    public $judul, $harga;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($judul, $harga)
    {
        $this->judul = $judul;
        $this->harga = $harga;
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
