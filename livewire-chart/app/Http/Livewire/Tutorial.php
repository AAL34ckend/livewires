<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Tutorial extends Component
{
    public $products;
    protected $listeners = ['ubahData' => 'changeData'];
    public function mount()
    {
        $products = Product::latest()->limit(10)->get();
        foreach($products as $item){
            $data['label'][] = $item->created_at->format('H:i:s');
            $data['data'][] = (int)$item->income;
        }
        $this->products = json_encode($data);
        // dd($this->products);
    }
    public function render()
    {
        return view('livewire.tutorial',)->extends('layouts.master')->section('content');
    }
    public function changeData()
    {
        $products = Product::latest()->limit(10)->get();
        foreach($products as $item){
            $data['label'][] = $item->created_at->format('H:i:s');
            $data['data'][] = (int)$item->income;
        }
        $this->products = json_encode($data);
        $this->emit('berhasiUpdate',['data' => $this->products]);
    }
}
