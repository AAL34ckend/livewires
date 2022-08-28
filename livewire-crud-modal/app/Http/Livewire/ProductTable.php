<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $product_id;
    public $name;
    public $price;

    protected $listeners = ['productStore' => 'render','productDestroy' => 'productDestroyer'];

    public function render()
    {
        return view('livewire.product-table',[
            'products' => Product::orderBy('id','desc')->paginate(5)
        ]);
    }
    public function productEdit($product)
    {
        $this->product_id = $product['id'];
        $this->name = $product['name'];
        $this->price = $product['price'];

    }

    public function productUpdate()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $data = [
            'name' => $this->name,
            'price' => $this->price,
        ];

        Product::where('id',$this->product_id)->update($data);
        $this->product_id=NULL;
        $this->name=NULL;
        $this->price=NULL;
        $this->emit('productStore');
    }
    public function productDelete($id)
    {
        $this->product_id = $id;

        $product = Product::find($id);
        $this->dispatchBrowserEvent('productDeleteConfirmation',['product' => $product]);
    }
    public function productDestroyer()
    {
        Product::find($this->product_id)->delete();
    }
}
