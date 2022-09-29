@extends('layout')

@section('content')
    <form action="/register" method="POST">
        @csrf

        <input type="email" name="email" placeholder="ex : toto@gmail.com" value="{{ old('email') }}"/>
        @include('form-error', ['field_name' => 'email'])

        <input type="password" name="password"/>
        @include('form-error', ['field_name' => 'password'])


        <input type="password" name="password_confirmation"/>
        @include('form-error', ['field_name' => 'password_confirmation'])


        <input type="submit" value="S'inscrire"/>
    </form>
@endsection

