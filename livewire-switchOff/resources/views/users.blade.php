@extends('layouts.app');

@push('styles')
    @livewireStyles
@endpush


@section('content')
   <div class="container">
        <h1>Users</h1>
        <hr>
        @livewire('user-active')
   </div>
@endsection

@push('scripts')
    @livewireScripts
@endpush
