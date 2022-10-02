<form class="form" action="/" method="POST">
    @csrf

    <div class="form_field">
        <input type="text" name="title" placeholder="Liste de course"/>
        @include('form-error', ['field_name' => 'title'])
    </div>

    <div class="form_actions">
        <input class="button -primary" type="submit" value="Créer"/>
    </div>
</form>

