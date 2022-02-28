@extends('layouts.plantilla')

@section('title', 'Pista ' . $pista->id)

@section('content')
<div style="margin-left: 15vw">
<div class="p-3 m-4" >

<h1>Bienvenido a la pista {{$pista->id}} </h1>
<a href="{{route('reservas.create')}}">Volver a pistas</a>
<p><strong>Categoría: </strong>{{$pista->categoria}}</p><br><br>



@for ($k = 0; $k < 3; $k++)

<form action="{{route('reservas.store', $pista->id)}}" method="POST">



    @csrf

    <label>
        Seleccione franja:

        <table class="m-4 p-4 flex ">

            <tr><th>Día {{$dias[$k]}}</th></tr>
            <input type="hidden" name="fecha" value={{date("Y/m/d", strtotime("+". $k ." days"))}} required>
            <tr>
                @for ($i = 0; $i < count($franjas); $i++)
                    @if ($reservadas[$k][$i] == false)
                        <td style="background-color: rgb(116, 228, 152); padding: 2vw;"> <button type="submit" name="franja" value={{$franjas[$i]}}>{{$franjas[$i]}}</button> </td>
                    {{-- <td style="background-color: rgb(116, 228, 152); padding: 2vw;"> {{$franjas[$i]}}</td> --}}
                    @else
                        <td style="background-color: rgb(231, 145, 123); padding: 2vw;"> <button type="submit" name="franja" value={{$franjas[$i]}}>{{$franjas[$i]}}</button> </td>
                        {{-- <td style="background-color: rgb(231, 145, 123); padding: 2vw;"> {{$franjas[$i]}}</td> --}}
                    @endif
                @endfor
            </tr>

            <tr> <td> <br><hr><br> </td><td> <br><hr><br> </td><td> <br><hr><br> </td><td> <br><hr><br> </td><td> <br><hr><br> </td><td> <br><hr><br> </td></tr>



        </table>

    </label><br><br>

    <label>
        Email:
        <input type="email" name="email_user" required>
    </label><br><br>


</form>


@endfor



</div>

</div>


@endsection
