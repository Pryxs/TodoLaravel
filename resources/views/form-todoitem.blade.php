<form class="form" action="/todolist/{{$todolist->id}}" method="POST">
    @csrf
    <input type="hidden" name="todolist_id" value="{{$todolist->id}}"/>

    <div class="form_field">
        <input type="text" name="title" placeholder="Acheter des bananes"/>
        @include('form-error', ['field_name' => 'title'])
    </div>

    <div class="form_field">
        <input type="text" name="description" placeholder="..."/>
        @include('form-error', ['field_name' => 'description'])
    </div>

    <div class="form_actions">
        <input class="button -primary" type="submit" value="Ajouter"/>
    </div>
</form>

