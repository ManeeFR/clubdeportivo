@extends('layouts.plantilla')

@section('title', 'Reservas create')

@section('content')
    <h1>En esta página podrás hacer una reserva</h1>
    <h2>Haz click en alguna de las pistas</h2>
    <div style=" margin:0px auto; text-align:center; max-width:70%; display:flex; justify-content: center; align-item:center; margin-top:4vh; flex-wrap:wrap; gap:2vw; flex-direction:row;">

        @foreach ($pistas as $pista)
            <div style="max-height:15vw; max-width:20vw;">
                <a href="{{route('reservas.show', $pista->id)}}"><img src="{{asset('img/post/padel_02.webp')}}" alt="pista">Pista {{$pista->id}}</a>

            </div>
                {{-- La etiqueta asset sirve para usar una imagenes alojada en en el directorio public,
                    esta sería la forma de usar imágenes en Laravel.--}}
        @endforeach
    </div>
    
@endsection
