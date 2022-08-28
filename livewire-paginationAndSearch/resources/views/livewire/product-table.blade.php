<div>
    <div class="container">
        <div class="mb-3">
            <input type="text" class="form-control" wire:model="search" placeholder="Cari Produk">
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $index => $item)
                    @if($product_id == $item->id)
                        <tr>
                            <td>{{ $product->firstItem() + $index }}</td>
                            <td>
                                <input type="text" class="form-control" wire:model="name">
                            </td>
                            <td>
                                <input type="text" class="form-control" wire:model="price">
                            </td>
                            <td>
                                <form action="" wire:submit.prevent="changeProduct" class="d-inline">
                                    <button class="btn btn-warning" type="submit">Update</button>
                                    <button class="btn btn-danger" wire:model="cancelEdit">Cancel</button>
                                </form>
                            </td>
                        </tr>
                    @else
                    <tr>
                        <td>{{ $products->firstItem() + $index }}</td>
                        <td>{{ $item->name }}</td>
                        <td>Rp.{{ number_format($item->price,0,',',',') }}</td>
                        <td>
                            <a href="" class="btn btn-primary" wire:click="editProduct({{ $item }})">Edit</a>
                        </td>
                    </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
        {{ $products->links() }}
   </div>
</div>
