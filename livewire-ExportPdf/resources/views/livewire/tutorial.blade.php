<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">User</div>
                <div class="card-body">
                    <button class="btn btn-success" wire:click="downloadExcel" @if(empty($mySelected)) disabled @endif>Export Excel</button>
                    <button class="btn btn-danger" wire:click="downloadPdf" @if(empty($mySelected)) disabled @endif>Export PDF</button>
                    @dump($mySelected)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $item)
                                <tr>
                                    <td>{{ $users->firstItem() + $key }}</td>
                                    <td>
                                        <input type="checkbox" wire:model='mySelected' value="{{ $item->id }}">
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
