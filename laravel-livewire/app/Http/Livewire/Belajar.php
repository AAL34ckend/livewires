<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    // public $nama = "Abdurrachman Almanshurah";
    // public $show_password = false;
    public $keranjang = 0;

    public function render()
    {
        return view('livewire.belajar');
    }
    public function plus()
    {
        $this->keranjang++;
    }
    public function minus()
    {
        $this->keranjang--;
    }
}
