@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

@auth
@if(Auth::user()->role_id === 1 OR Auth::user()->role_id === 2 OR Auth::user()->role_id === 3)

<div class="alert alert-success" role="alert">
 <a href="{{ route('admin.main.index') }}" class="btn btn-primary">Admin Panel</a>
</div>

@endif
@endauth

            </div>
        </div>
    </div>
</div>
@endsection
