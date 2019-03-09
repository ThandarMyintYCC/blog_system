@extends('layout.master')
@section('title', 'Register')
@section('content')
    <div class="container col-md-6 col-md-offset-3">
        <div class="well bs-component">
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <legend>Register an Account</legend>
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <!-- Username -->
                        <label class="col-lg-2"  for="name" control-label>Name</label>
                        <div class="col-lg-10">
                            <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="{{old('name')}}">
                        </div>
                    </div>
                
                    <div class="form-group">
                    <!-- E-mail -->
                    <label class="col-lg-2" for="email" control-label>E-mail</label>
                    <div class="col-lg-10">
                        <input type="text" id="email" name="email" placeholder="Email" class="form-control" value="{{old('email')}}">
                    </div>
                    </div>
                
                    <div class="form-group">
                    <!-- Password-->
                    <label class="col-lg-2" for="password" control-label>Password</label>
                    <div class="col-lg-10">
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    </div>
                
                    <div class="form-group">
                    <!-- Password -->
                    <label class="col-lg-2"  for="password_confirmation" control-label>Confirm Password</label>
                    <div class="col-lg-10">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                    </div>
                    </div>
                
                    <div class="form-group">
                    <!-- Button -->
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection