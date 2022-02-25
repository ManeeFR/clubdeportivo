@extends('layouts.plantilla')

@section('title', 'Reserva ' . $reserva->num_pista)

@section('content')
<h1>Bienvenido a la reserva {{$reserva->num_pista}} </h1>
<a href="{{route('reservas.index')}}">Volver a reservas</a>
<p><strong>Categoría: </strong>{{$reserva->categoria}}</p>
@endsection
