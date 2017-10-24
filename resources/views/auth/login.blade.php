@extends('layouts.app')

@section('content')

    <header id="header">
        <h1>Iniciar sesion</h1>
        <p>Por favor ingresa tus datos para poder continuar</p>
    </header>

    <form id="signup-form" method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
        <input type="text" name="matricula" placeholder="Ingresa tu matricula" />
        {!! $errors->first('matricula', '<p class="help-block">:message</p>') !!}
        <input type="password" name="password" placeholder="Ingresa tu contraseña" />
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        <input type="submit" name="access" value="Acceder" />
    </form>

@endsection