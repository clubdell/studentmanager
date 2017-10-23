@extends('layouts.app')

@section('content')
    <h1 class="panel-title">Bienvenido {{ auth()->user()->name }}</h1>
    <strong>Matricula:</strong> {{ auth()->user()->matricula }}
    <form action="{{ route('logout') }}" method="post">
        {{ csrf_field() }}
        <input type="submit" value="Cerrar sesion" />
    </form>
@endsection