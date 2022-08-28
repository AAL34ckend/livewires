@extends('layouts.app')

@push('styles')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    @livewireStyles
@endpush

@section('content')
<div class="container">
    <h1>Laravel Livewire CKEDITOR</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">
            @livewire('my-editor')
        </div>
    </div>
</div>
@endsection

@push('scripts')
    @livewireScripts
@endpush
