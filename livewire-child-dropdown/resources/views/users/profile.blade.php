@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Profile</span>
                        <a href="{{ route('user.edit') }}" class="badge bg-warning text-dark">Edit</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Province</label>
                            @if(Auth::user()->myProvince)
                                <input type="text" class="form-control" value="{{ Auth::user()->myProvince->name }}" disabled>
                            @else
                                <input type="text" class="form-control"disabled>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label>City</label>
                            @if(Auth::user()->myCity)
                                <input type="text" class="form-control" value="{{ Auth::user()->myCity->name }}" disabled>
                            @else
                                <input type="text" class="form-control"disabled>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
