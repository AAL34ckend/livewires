<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if($alert)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Terima Kasih</strong> sudah melengkapi inputan profile.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Edit</span>
                        <a href="{{ route('user.profile') }}" class="badge bg-warning text-dark">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Province</label>
                            <select class="form-select" wire:model="myProvince">
                                <option value="" selected hidden>Pilih Provinsi</option>
                                @foreach($province as $province)
                                    <option value="{{ $province->code }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>City</label>
                            @if($city)
                                <select class="form-select" wire:model="myCity">
                                    <option>Pilih Kota</option>
                                    @foreach($city->cities as $item)
                                        <option value="{{ $item->code }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            @else
                                <select class="form-select" wire:model="myCity" disabled>
                                    <option>Pilih Kota</option>
                                </select>
                            @endif
                        </div>
                        <button class="btn btn-primary" wire:click="submit">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
