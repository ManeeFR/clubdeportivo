@extends('layouts.plantilla')

@section('title', 'Pista ' . $pistas->id)

@section('content')
<h1>Bienvenido a la pista {{$pistas->id}} </h1>
<a href="{{route('reservas.create')}}">Volver a pistas</a>
<p><strong>Categoría: </strong>{{$pistas->categoria}}</p>
@endsection
