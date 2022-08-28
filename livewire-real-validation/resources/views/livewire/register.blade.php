<div>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control @if($errors->has('name')) is-invalid @elseif( $name == NULL ) @else is-valid @endif" name="name" placeholder="Nama Lengkap">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" class="form-control @if($errors->has('email')) is-invalid @elseif( $email == NULL ) @else is-valid @endif" name="email" wire:model="name" placeholder="user@example.com">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Kata Sandi</label>
            <input type="password" class="form-control @if($errors->has('password')) is-invalid @elseif( $password == NULL ) @else is-valid @endif" wire:model="password" name="password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Ulangi Kata Sandi</label>
            <input type="password" class="form-control @if($errors->has('password_confirmation')) is-invalid @elseif( $password == NULL ) @else is-valid @endif" wire:model="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
