<div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                 <div class="card mb-4">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" @error('body') is-invalid @enderror wire:model="body" placeholder="Apa Aktivitasmu sekarang?">
                            @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" wire:click="submit">Tambahkan</button>
                    </div>
                 </div>
                 <ul class="list-group" wire:sortable="updateTaskOrder">
                    @foreach($activities as $activity)
                        <li wire:sortable.item="{{ $activity->id }}" wire:key="activity-{{ $activity->id }}" class="list-group-item d-flex justify-content-between">
                            <span wire:sortable.handle role="button">{{ $activity->body }}</span>
                            <button class="btn badge bg-danger" wire:click="delete({{ $activity->id }})">Delete</button>
                        </li>
                    @endforeach
                 </ul>
            </div>
        </div>
    </div>
</div>
