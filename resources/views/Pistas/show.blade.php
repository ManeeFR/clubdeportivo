@extends('layouts.plantilla')

@section('title', 'Pista ' . $pista->id)

@section('content')
<div style="margin-left: 15vw">
<div class="p-3 m-4" >

<h1>Bienvenido a la pista {{$pista->id}} </h1>
<a href="{{route('reservas.create')}}">Volver a pistas</a>
<p><strong>Categoría: </strong>{{$pista->categoria}}</p><br><br>

<form action="{{route('reservas.store', $pista->id)}}" method="POST">

    @csrf

    <label>
        Seleccione franja:

        <table class="m-4 p-4 flex ">

            @for ($k = 0; $k < 3; $k++)

            <tr><th>Día {{$dias[$k]}}</th></tr>
            <tr>
                @for ($i = 0; $i < count($franjas); $i++)
                    @if ($reservadas[$k][$i] == false)
                        <td style="background-color: rgb(116, 228, 152); padding: 2vw;"> {{$franjas[$i]}}</td>
                    @else
                        <td style="background-color: rgb(231, 145, 123); padding: 2vw;"> {{$franjas[$i]}}</td>
                    @endif
                @endfor
            </tr>

            <tr> <td> <br><hr><br> </td><td> <br><hr><br> </td><td> <br><hr><br> </td><td> <br><hr><br> </td><td> <br><hr><br> </td><td> <br><hr><br> </td></tr>


            @endfor




        </table>




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

    <input type="hidden" name="fecha" value={{date('Y/m/d', strtotime('now'))}}>

    {{-- <input type="hidden" name="fecha" value={{$fecha1['mday']}}> --}}
    {{-- <input type="hidden" name="fecha" value={{$fecha1['mon']}}> --}}

    <button type="submit">Enviar formulario</button>

</form>
</div>

</div>


@endsection