@extends('layout')

@section('content')
    <h2>Base vue</h2>
    @include('form-todolist')

    <div class="todolist-container">
        <ul>
            @foreach ($current_user_todolists as $todolist)
                <li><a href="/todolist/{{$todolist->id}}">{{$todolist->title}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection

