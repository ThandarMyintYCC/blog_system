@extends('layout.master')
@section('title', 'All users')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>All Roles</h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            @if ($roles->isEmpty())
                <p>There is no user.</p> 
            @else
                <table class="table">
                    <tr>
                        <th>Name</th>
                    </tr>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{!! $role->name !!}</td>
                        </tr>
                    @endforeach
                </table>     
            @endif
        </div>
    </div>
@endsection