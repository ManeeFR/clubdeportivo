@extends('layouts.plantilla')

@section('title', 'index')

@section('content')
<h1>Bienvenido a la página principal de pistas</h1>

<ul>
    @foreach ($pistas as $pista)
        <li>
            <a href="{{route('pistas.show', $pista->num_pista)}}">Pista nº {{$pista->num_pista}}</a>
        </li>
    @endforeach
</ul>
{{$pistas->links()}}
@endsection
