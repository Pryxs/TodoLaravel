<div>
    <h2>{{$todolist->title}}</h2>

    @include('form-todoitem')

    <div class="todoitems-container">
        <ul>
            @foreach ($todoitems as $todoitem)
                <li>
                    <p>{{$todoitem->title}}</p>   
                    <p>{{$todoitem->description}}</p>     
                </li>
            @endforeach
        </ul>
    </div>
</div>
