@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="mb-4">
            <a href="{{ route('user.home') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" value="{{ $user->name }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="text" class="form-control" value="{{ $user->email }}" disabled>
        </div>
    </div>
@endsection
