<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Tutorial extends Component
{
    public $provinces, $fromCities, $toCities;
    public $fromProvince, $fromCity, $toProvince, $toCity;
    public $weight,$courier;

    public $myResult = NULL;

    public function mount()
    {
        $this->provinces = Http::get('https://api.rajaongkir.com/starter/province',[
            'key' => '89a4313d3dbe7dbe0fd2312b33952c16'
        ]);
        $this->provinces = json_decode($this->provinces->body(),true)['rajaongkir']['results'];
    }
    public function updatedFromProvince($value)
    {
        if($value){
            $this->fromCities = Http::get('https://api.rajaongkir.com/starter/city',[
                'key' => '89a4313d3dbe7dbe0fd2312b33952c16',
                'province' => $value
            ]);
            $this->fromCities = json_decode($this->fromCities->body(),true)['rajaongkir']['results'];
        }else{
            $this->fromCities = NULL;
        }
    }
    public function updatedToProvince($value)
    {
        if($value){
            $this->toCities = Http::get('https://api.rajaongkir.com/starter/city',[
                'key' => '89a4313d3dbe7dbe0fd2312b33952c16',
                'province' => $value
            ]);
            $this->toCities = json_decode($this->toCities->body(),true)['rajaongkir']['results'];
        }else{
            $this->toCities = NULL;
        }
    }
    public function render()
    {
        return view('livewire.tutorial')->extends('layouts.master')->section('content');
    }
    public function check()
    {
        $this->myResult = Http::withHeaders([
            'key' => '89a4313d3dbe7dbe0fd2312b33952c16',
        ])->post('https://api.rajaongkir.com/starter/cost',[
            'origin' => $this->fromCity,
            'destination' => $this->toCity,
            'weight' => $this->weight,
            'courier' => $this->courier,
        ]);

        $this->myResult = json_decode($this->myResult->body(),true)['rajaongkir']['results'];
    }
}
