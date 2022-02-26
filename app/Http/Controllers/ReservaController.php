<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reserva;
use App\Models\Pista;
use App\Models\User;

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
        $fecha = getdate();
        return view('pistas.show', compact('pistas', 'fecha'));
    }

    // Encargado de almacenar en la BD
    public function store(Request $request, $id_pista)
    {

        // $consulta = Reserva::find($id_pista);
        $consulta = Reserva::where('id_pista', '=', $id_pista)->where('franja', '=', $request->franja)
        ->where('dia', '=', $request->dia)->where('mes', '=', $request->mes)->get();

        if (count($consulta) == 0) {
            $reserva = new Reserva();
            $reserva->email_user = $request->email_user;
            $reserva->id_pista = $id_pista;
            $reserva->franja = $request->franja;
            $reserva->dia = $request->dia;
            $reserva->mes = $request->mes;

            $reserva->save();
        } else {
            /**
             * Aquí habría que poner un route() o algo que indique que esa pista a esa hora y día ya está reservada
             */
        }

        return redirect()->route('reservas.show', $id_pista);

    }

    public function compruebaUser(Request $request)
    {


        $usuario = User::where('email', '=', $request->email)->where('password', '=', $request->password)->get();

        if (count($usuario) == 0) {

            // El usuario no existe en la BD

            // return view('index');
            // $pistas = Pista::all();
            // return view('reservas.create', compact('pistas'));

        } else {

            return view('index');
            // return redirect()->route('index');

            // return view('create.reservas');
            $pistas = Pista::all();
            return view('reservas.create', compact('pistas'));
        }

    }
}
