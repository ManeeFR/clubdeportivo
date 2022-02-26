<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reserva;
use App\Models\Pista;

class ReservaController extends Controller
{

    public function index()
    {
        $reservas = Reserva::paginate();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $pistas = Pista::all();
        return view('reservas.create', compact('pistas'));
    }

    public function show($id)
    {
        $pistas = Pista::find($id);
        return view('pistas.show', compact('pistas'));
    }

    // Encargado de almacenar en la BD
    public function store(Request $request, $id_pista, $franja)
    {
        // JAVI dice : He modificado esta función para intentar que compruebe si esta libre la reserva pero sin éxito.
        //             Estaba intendo crear una consulta que devolviera solo el registro con la id_pista y franja seleccionada,
        //             pero no se como meter la franja en la consulta.
        //             Cuando ejecutes el proyecto te va a petar a la hora de seleccionar pista pero porque,
        //             no está bien recogida la franja en la linea 12 de show.blade.php.
        
        $consulta = Reserva::find($id_pista, $franja->$request->franja);
        $existe = count($consulta);

        if ($existe > 0) {
            echo '<script>alert("Ya existe esa reserva")</script>';
        } else {
            $reserva = new Reserva();
            $reserva->email_user = $request->email_user;
            $reserva->id_pista = $id_pista;
            $reserva->franja = $request->franja;

            $reserva->save();
        }



        return redirect()->route('reservas.show', $id_pista); // aquí debería poner $reserva->id() pero Laravel es mu listo

    }
}
