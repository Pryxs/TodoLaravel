@extends('layout')

@section('content')
    <div class="register-container">
        <h1>Todo Laravel</h1>
        
        <form class="form" action="/register" method="POST">
            @csrf

            <div class="form_field">
                <input type="email" name="email" placeholder="ex : toto@gmail.com" value="{{ old('email') }}"/>
                @include('form-error', ['field_name' => 'email'])
            </div>

            <div class="form_field">
                <input type="password" name="password"/>
                @include('form-error', ['field_name' => 'password'])
            </div>

            <div class="form_field">
                <input type="password" name="password_confirmation"/>
                @include('form-error', ['field_name' => 'password_confirmation'])
            </div>

            <div class="form_actions">
                <input class="button -primary" type="submit" value="S'inscrire"/>
            </div>
        </form>
    </div>
@endsection

