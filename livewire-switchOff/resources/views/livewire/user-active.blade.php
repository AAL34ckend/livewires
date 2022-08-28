<div>
    <table class="table">
        <thead>
            <th>emai</th>
            <td>action</td>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <td>{{ $item->email }}</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault{{ $item->id }}" wire:click="userStatus({{ $item->id }})" {{ $item->deleted_at != NULL ? '' : 'checked'}}>
                            <label class="form-check-label" for="flexSwitchCheckDefault{{ $item->id }}">{{ $item->deleted_at != NULL ? 'Tidak Aktif' : 'Aktif'}}</label>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
