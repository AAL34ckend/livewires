@extends('layouts.app')

@push('styles')
    @livewireStyles
@endpush

@section('content')
    <div class="container">
        <h1>Product</h1>
        <hr>
    </div>
    @livewire('product-table')
@endsection

@push('scritps')
    @livewireScripts
@endpush
