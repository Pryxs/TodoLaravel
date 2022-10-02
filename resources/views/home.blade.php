@extends('layout')

@section('content')
    <div class="home-page">
        <h1>Todolist</h1>
        @include('form-todolist')

        <div class="todolist-container list">
            <ul>
                @foreach ($current_user_todolists as $todolist)
                    <li><a href="/todolist/{{$todolist->id}}">{{$todolist->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

