@extends('layouts.plantilla')

@section('title', 'Pista ' . $pistas->id)

@section('content')
<div class="p-3 m-4">

<h1>Bienvenido a la pista {{$pistas->id}} </h1>
<a href="{{route('reservas.create')}}">Volver a pistas</a>
<p><strong>Categoría: </strong>{{$pistas->categoria}}</p><br><br>

<form action="{{route('reservas.store', $pistas->id)}}" method="POST">

    @csrf

    <label>
        Seleccione franja:
        <select name="franja">
            <option value="9:00 - 10:30">9:00 - 10:30</option>
            <option value="10:30 - 12:00">10:30 - 12:00</option>
            <option value="12:00 - 13:30">12:00 - 13:30</option>
            <option value="16:00 - 17:30">16:00 - 17:30</option>
            <option value="17:30 - 19:00">17:30 - 19:00</option>
            <option value="19:00 - 20:30">19:00 - 20:30</option>
        </select>
    </label><br><br>

    <label>
        Email:
        <input type="email" name="email_user">
    </label><br><br>

    <input type="hidden" name="dia" value={{$fecha['mday']}}>
    <input type="hidden" name="mes" value={{$fecha['mon']}}>

    <button type="submit">Enviar formulario</button>

</form>

</div>


@endsection
