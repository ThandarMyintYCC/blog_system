@extends('layout.master')
@section('title', 'Blog System')
@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Welcome from Blog System
            </div>
        </div>
    </div>
@endsection
