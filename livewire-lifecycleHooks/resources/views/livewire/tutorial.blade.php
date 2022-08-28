<div>
    <input type="text" wire:model="hobi" placholder="properti hobi">
    <input type="text" wire:model="warna_kesukaan" placholder="properti warna kesukaan">
    <div>
        <div>Hobi : {{ $hobi }}</div>
        <div>Warna Kesukaan : {{ $warna_kesukaan }}</div>
    </div>

    <ul>
        @foreach ($proses as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
