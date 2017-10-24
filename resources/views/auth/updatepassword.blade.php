@extends('layouts.app')

@section('content')
    <h1>Informacion</h1>
    <p>Parece que es la primera vez que inicias sesion por lo que necesitamos que actualizes tu
    contraseña por motivos de seguridad.</p>
    <form id="signup-form" method="post" action="{{ route('updatepassword') }}">
        {{ csrf_field() }}
        <input type="password" name="password" placeholder="Ingresa tu contraseña" />
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        <input type="submit" name="access" value="Actualizar" />
    </form>
@endsection