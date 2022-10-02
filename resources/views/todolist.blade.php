@extends('layout')

@section('content')
    <div class="todolist-page">
        <h2>{{$todolist->title}}</h2>

        @include('form-todoitem')

        @if(sizeof($todoitems) > 0)
            <div class="todoitems-container list">
                <ul>
                    @foreach ($todoitems as $todoitem)
                        <li>
                            <h4>{{$todoitem->title}}</h4>   
                            @if($todoitem->description)
                                <p>{{$todoitem->description}}</p> 
                            @endif   
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection

