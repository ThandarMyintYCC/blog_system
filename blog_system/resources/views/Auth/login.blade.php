@extends('layout.master')
@section('title', 'Login Page')
@section('content')
    <div class="container col-md-6 col-md-offset-3">
        <div class="well well bs-component">
            <form method="POST" class="form-horizontal">
                <legend>Login</legend>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email" class="col-lg-2">Email address</label>
                    <div class="col-lg-10">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2">Password</label>
                    <div class="col-lg-10">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me?
                </label>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection