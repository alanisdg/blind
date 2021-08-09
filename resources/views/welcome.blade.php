@extends('layouts.welcome')

@section('content')
    <div class="row">
            @if (Route::has('login'))
            <div class="col-md-12 text-center">
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
