@extends('layouts.plantilla')

@section('title', 'Reserva ' . $reserva->name)

@section('content')
<h1>Bienvenido a la reserva {{$reserva->name}} </h1>
<a href="{{route('reservas.index')}}">Volver a reservas</a>
<p><strong>Categoría: </strong>{{$reserva->categoria}}</p>
<p>{{$reserva->description}}</p>
@endsection
