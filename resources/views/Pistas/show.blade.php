@extends('layouts.plantilla')

@section('title', 'Pista ' . $pistas->num_pista)

@section('content')
<h1>Bienvenido a la pista {{$pistas->num_pista}} </h1>
<a href="{{route('reservas.create')}}">Volver a pistas</a>
<p><strong>Categoría: </strong>{{$pistas->categoria}}</p>
@endsection
