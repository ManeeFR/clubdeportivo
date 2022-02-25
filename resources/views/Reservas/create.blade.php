@extends('layouts.plantilla')

@section('title', 'Reservas create')

@section('content')
    <h1>En esta página podrás hacer una reserva</h1>
    <h2>Haz click en alguna de las pistas</h2>
    <ul>
        @foreach ($pistas as $pista)
            <li>
                <a href="{{route('reservas.show', $pista->id_pista)}}">Hacer reserva en la pista nº {{$pista->id_pista}}</a>
            </li>
        @endforeach
    </ul>
@endsection
