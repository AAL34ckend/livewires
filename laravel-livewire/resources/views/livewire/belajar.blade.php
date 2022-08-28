<div>
    <div class="mb-3">
        {{--  <input type="text" class="form-control" wire:model="nama">  --}}
        {{--  <textarea class="form-control" wire:model="nama"></textarea>  --}}
        {{--  <input type="radio" nama="jenis-kelamin" value="Laki-laki" wire:model="nama"> Laki-Laki
        <input type="radio" nama="jenis-kelamin" value="Perempuan" wire:model="nama"> Perempuan  --}}
        {{--  <select class="form-select" wire:model="nama">
            <option hidden>Pilih Jenis Kelamin</option>
            <option value="pria">Pria</option>
            <option value="perempuan">Perempuan</option>
        </select>  --}}

        {{--  PROPERTIES  --}}
        {{--  <input
        @if($show_password == 'show')
        type="text"
        @else
        type="password"
        @endif

        class="form-control"
        wire:model="nama">

        <label for="">Show Password</label>
        <input type="checkbox" wire:model="show_password" value="show">  --}}

        {{--  ACTION!  --}}
        <input type="number" class="form-control" wire:model="keranjang">
    </div>
    <button class="btn btn-primary" wire:click="plus">+ Plus</button>
    @if( $keranjang >= 1)
        <button class="btn btn-danger" wire:click="minus">- Minus</button>
    @endif
    {{--  Hello Nama Saya Adalah {{ $nama }}  --}}

</div>
