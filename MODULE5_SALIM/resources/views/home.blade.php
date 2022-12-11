@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="welcome_message">
                    {{ __('selamat datang di showroom [name]') }}</div>
                    <button type="button" color="blue">Car</button> 
                    <img src="{{ asset('img/myimage.jpg') }}" alt="ferrari next to te beach" width="500" height="300">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
