<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tutorial extends Component
{
    public $hobi = 'Bermain Game';
    public $warna_kesukaan = "Biru";

    public $proses = [];

    public function mount()
    {
        $this->hobi = 'main bola';
        $this->warna_kesukaan = 'hijau';
        $this->proses[] = 'sedang dimount';
    }
    public function hydrate()
    {
        $this->proses[] = 'sedang dihydrate';

    }
    public function updating($name, $value)
    {
        $this->proses[] = "sedang diupdating => $name & $value";

    }
    public function updatingWarnaKesukaan($name, $value)
    {
        $this->proses[] = "sedang di updatingWarnaKesukaan => $name & $value";

    }
    public function updatedWarnaKesukaan($name, $value)
    {
        $this->proses[] = "sedang di updatedWarnaKesukaan => $name & $value";

    }
    public function updated($name, $value)
    {
        $this->proses[] = "sedang diupdating => $name & $value";

    }

    public function render()
    {
        $this->proses[] = 'sedang dirender';
        $this->proses[] = '---';

        return view('livewire.tutorial');
    }
}
