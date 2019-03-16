@extends('layout.master')
@section('title', 'Create a New Role')
@section('content')
    <div class="container col-md-6 col-md-offset-3">
        <div class="well well bs-component">
            <form method="post" class="form-horizontal">
                <legend>Create a New Role</legend>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="col-lg-2">Name</label>
                    <div class="col-lg-10">
                        <input type="name" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="reset" class="btn btn-default">Cancle</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection