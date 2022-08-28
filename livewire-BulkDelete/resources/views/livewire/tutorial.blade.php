<div>
    @dump($firstId)
    @dump($selectAll)
    @dump($mySelected)
    <button
    wire:click.prevent="deleteSelected"
    class="btn btn-danger"
    onclick="confirm('yakin?')"
    @if(empty($mySelected))
        disabled
    @endif
    >Delete</button>
    <table class="table">
        <thead>
            <th>No</th>
            <th>
                <input type="checkbox" wire:model="selectAll">
                <input type="hidden" wire:model="firstId" value="{{ $users[0]->id }}">
            </th>
            <th>Nama</th>
        </thead>
        <tbody>
            @foreach ($users as $index => $item )
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td><input type="checkbox" wire:model="mySelected" value="{{ $item->id }}"></td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}

    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script>
            $(".page-item").on('click',function(event){
                livewire.emit('resetMySelected')
            })
        </script>
    @endpush
</div>
