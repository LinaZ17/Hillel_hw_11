@extends('layouts.app')

@section('title', 'Посты')

@section('content')

    <table class="table table-light table-hover mt-3">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Tasks</th>
            <th scope="col">Content</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tbody>
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->title}}</td>
                <td>{{$user->content}}</td>
                <td>{{$user->status_id}}</td>
            </tr>
            @endforeach
            </tbody>
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Tasks</th>
                <th scope="col">Content</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
    </table>


@endsection


