@extends('layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('success', data => {
            console.log(data.pesan);
            Swal.fire({
                title: 'Ini adalah notifikasi!',
                text: data.pesan,
                icon: 'success',
                confirmButtonText: 'Wow'
            })
        })
    </script>
@endpush

@section('content')
    <div class="container">
        <h1>Livewire</h1>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body" id="alert-message">
              </div>
            </div>
        </div>
        @livewire('tutorial')
    </div>
@endsection
