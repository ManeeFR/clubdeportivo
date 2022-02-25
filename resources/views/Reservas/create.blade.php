@extends('layouts.plantilla')

@section('title', 'Reservas create')

@section('content')
    <h1>En esta página podrás hacer una reserva</h1>
    <h2>Haz click en alguna de las pistas</h2>
    <ul>
        @foreach ($pistas as $pista)
            <li>
                <a href="{{route('reservas.show', $pista->id)}}">Hacer reserva en la pista nº {{$pista->id}}</a>
            </li>
        @endforeach
    </ul>
@endsection
