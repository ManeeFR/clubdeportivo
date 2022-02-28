@extends('layouts.plantilla')

@section('title', 'Reservas create')

@section('content')
<style>
    .img {
        transform: rotate(0deg);
    transition: transform 0.5s;

    }
    .img:hover {
        transform: rotate(2deg) scale(1.1);
        transition: transform 1s;
    }
</style>

    <div style=" margin:0px auto; text-align:center; max-width:70%; display:flex; justify-content: center;
                 align-item:center; margin-top:15vh; flex-wrap:wrap; gap:2vw; flex-direction:row; ">

        @foreach ($pistas as $pista)
            <div class="img" style="max-height:15vw; max-width:20vw; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.4); transform-scale: ">
                <a href="{{route('reservas.show', $pista->id)}}"><img src="{{asset('img/post/padel_02.webp')}}" alt="pista">Pista {{$pista->id}}</a>

            </div>
                {{-- La etiqueta asset sirve para usar una imágenes alojadas en en el directorio public,
                    esta sería la forma de usar imágenes en Laravel.--}}
        @endforeach
    </div>

@endsection
