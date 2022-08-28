<div>
    @include('my_components.alert-success')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ route('user.detail',$item->id) }}" class="text-decoration-none badge bg-primary">Detail</a>
                        <a href="{{ route('user.edit',$item->id) }}" class="text-decoration-none badge bg-warning">Edit</a>
                        <button class="btn badge bg-danger" wire:click="delete({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
