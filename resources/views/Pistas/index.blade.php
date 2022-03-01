@extends('layouts.plantilla')

@section('title', 'Pistas')

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

<h1 style="display: flex; justify-content:center; font-size: 1.5em; margin-top: 4vh;">¡Escoge la pista que más te guste!</h1>

    <div style="margin:0px auto; text-align:center; max-width:70%; display:flex; justify-content: center;
                align-item:center; margin-top:15vh; flex-wrap:wrap; gap:2vw; flex-direction:row;">

        @foreach ($pistas as $pista)
            <div class="img" style="border-radius:10px; max-height:15vw; max-width:20vw; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.4);">
                <a href="{{route('reservas.show', $pista->id)}}"><img src="{{asset('img/post/padel_02.webp')}}" style="border-radius:6px;" alt="pista"><div style="background-color: #353f6e;"> Pista {{$pista->id}}</div></a>
            </div>

        @endforeach
    </div>
    <footer style="position: absolute; bottom: 0; left: 35%;">
        <span><small style="color: black;"> Realizado por Manuel y Javier, alumnado del IES Ruiz Gijón</small></span>
    </footer>
@endsection
