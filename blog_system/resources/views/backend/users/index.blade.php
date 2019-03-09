@extends('layout.master')
@section('title', 'All users')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>All Users</h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            @if ($users->isEmpty())
                <p>There is no user.</p> 
            @else
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined At</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td><a href="#">{!! $user->name !!}</a></td>
                            <td>{!! $user->email !!}</td>
                            <td>{!! $user->create_at !!}</td>
                        </tr>
                    @endforeach
                </table>     
            @endif
        </div>
    </div>
@endsection