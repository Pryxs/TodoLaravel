@extends('layout')

@section('content')
    <div class="login-container">
        <h1>Todo Laravel</h1>

        <form class="form" action="/login" method="POST">
            @csrf

            <div class="form_field">
                <input type="email" name="email" placeholder="ex : toto@gmail.com" value="corentin25200@gmail.com"/>
                @include('form-error', ['field_name' => 'email'])
            </div>

            <div class="form_field">
                <input type="password" name="password" value="test"/>
                @include('form-error', ['field_name' => 'password'])
            </div>

            <div class="form_actions">
                <input class="button -primary" type="submit" value="Se connecter"/>
                <a class="button -secondary" href="/register">S'inscrire</a>
            </div>
        </form>
    </div>
@endsection

