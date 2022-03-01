
@extends('layouts.app')

@section('title', 'Error 404')

@section('content')
{{-- <div style="background-image: {{ asset('img/post/404.png') }};" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center"></div> --}}
{{-- <img src="../../public/img/post/404.png" alt=""> --}}
<div class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <h1 style="margin: 2vh; margin-top: 12vh;">Error 404, página no encontrada.</h1>
</div>
@endsection
