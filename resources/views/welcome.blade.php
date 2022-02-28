@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
    <h1>Bienvenido a la página principal</h1>

    <a href="{{route('reservas.create')}}">Reservar una pista</a>
@endsection
