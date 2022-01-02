
@extends('layouts.app')

@section('title', 'Посты')

@section('content')

        <table class="table mt-3">
            <thead>
            <tr class="table-dark">
                <th scope="col">№</th>
                <th scope="col">Tasks</th>
                <th scope="col">Content</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            @foreach($tasks as $task)
                <tbody>
                <tr>
                    <th scope="row">{{$task->id}}</th>
                    <td>{{$task->title}}</td>
                    <td>{{$task->content}}</td>
                    <td>{{$task->status['name']}}</td>
                </tr>
                @endforeach
                </tbody>
                <thead>
                <tr class="table-dark">
                    <th scope="col">№</th>
                    <th scope="col">Новости</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Статус</th>
                </tr>
                </thead>
        </table>


@endsection


