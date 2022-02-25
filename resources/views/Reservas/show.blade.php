@extends('layouts.plantilla')

@section('title', 'Reserva ' . $reservas->id)

@section('content')
<h1>Bienvenido a la reserva {{$reservas->id}} </h1>
<h1>Se ha reservado la pista nª {{$reservas->id_pista}} </h1>
<a href="{{route('reservas.index')}}">Volver a reservas</a>
<p><strong>Email: </strong>{{$reservas->email_user}}</p>
@endsection
