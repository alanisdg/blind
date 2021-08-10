@extends('layouts.welcome')

@section('content')
    <div class="row">
        <div class="col-md-6 text-white ">
            <h1 class="headline">Citas en <strong>videollamada</strong></h1>
            <h5>en todo el mundo</h5>
        </div>
            @if (Route::has('login'))
            <div class="col-md-6 text-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                    <div class="row">
                        <div class="col-md-5">
                            Registrarse
                        </div>
                    </div>
                    @endif
                @endauth
            </div>
            @endif
    </div>
@endsection
