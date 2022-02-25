@extends('layouts.plantilla')

@section('title', 'index')

@section('content')
<h1>Bienvenido a la página principal de reservas</h1>
<a href="{{route('reservas.create')}}">Reservar</a>
<ul>
    @foreach ($reservas as $reserva)
        <li>
            <a href="{{route('reservas.show', $reserva->id_pista)}}">Reserva en la pista nº {{$reserva->id_pista}}</a>
        </li>
    @endforeach
</ul>
{{$reservas->links()}}
@endsection
