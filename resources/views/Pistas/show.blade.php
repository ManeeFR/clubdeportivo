@extends('layouts.plantilla')

@section('title', 'Pista ' . $pista->id)

@section('content')

<div style="margin-left: 15vw; margin-top: 1vh;">

    <div style="display: flex; justify-content: space-between; height: 250px; ">
        <div style="margin-top: 3vh; ">
            <h1 style="font-size: 50px">PISTA {{$pista->id}} </h1>
            <p style="font-size: 30px"><strong>Categoría: </strong>{{$pista->categoria}}</p><br><br>
        </div>
        
<img src="{{asset('/img/post/logopadel.png')}}" alt="">
    </div>



@for ($k = 0; $k < 3; $k++)

<form action="{{route('reservas.store', $pista->id)}}" method="POST">

    @csrf

    <label>

        <table style="margin-top: -1.2em; padding-top: -1.2em;" class="p-4 flex">

            <tr><th>Día {{$dias[$k]}}</th></tr>
            <input type="hidden" name="fecha" value={{date("Y/m/d", strtotime("+". $k ." days"))}} required>

            <tr>
                @for ($i = 0; $i < count($franjas); $i++)
                    @if ($reservadas[$k][$i] == false)
                        <td style="background-color: rgb(116, 228, 152); padding: 2vw;"> <button type="submit" data-mdb-ripple="true" name="franja" value={{$franjas[$i]}}>{{$franjas[$i]}}</button> </td>
                    @else
                        <td style="background-color: rgb(231, 145, 123); padding: 2vw;"> {{$franjas[$i]}} </td>
                    @endif
                @endfor
            </tr>

        </table>

    </label>

</form>


@endfor
<div style="margin: 6vh 2vh;">

    <a style="background-color: #4285f4; border-radius: 10px; padding: 1vw;" href="{{route('pistas')}}">Volver a pistas</a>
</div>



</div>
<footer style="position: absolute; bottom: 0; left: 35%;">
    <span><small style="color: black;"> Realizado por Manuel y Javier, alumnado del IES Ruiz Gijón</small></span>
</footer>


@endsection
