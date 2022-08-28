<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    public $search = '';

    public $name = NULL;
    public $product_id = NULL;
    public $price = NULL;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.product-table',[
            'products' => Product::where('name','like','%',$this->search,'%')->paginate(5)
        ]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function editProduct($product)
    {
        $this->product_id = $product['id'];
        $this->product_name = $product['name'];
        $this->product_price = $product['price'];
    }

    public function changeProduct()
    {
        Product::where('id', $this->product_id)->update([
            'name' => $this->name,
            'name' => $this->price,
        ]);
        $this->canceEdit();
    }
    public function cancelEdit()
    {
        $this->product_id = NULL;
        $this->product_name = NULL;
        $this->product_price = NULL;
    }
}
