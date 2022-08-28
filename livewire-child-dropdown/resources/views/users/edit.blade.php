@extends('layouts.app')

@push('styles')
    @livewireStyles
@endpush

@section('content')
    @livewire('edit-profile')
@endsection

@push('scripts')
    @livewireScripts
@endpush
