<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Pista;

class ReservaController extends Controller
{

    public function index() {
        $reservas = Reserva::paginate();
        return view('reservas.index', compact('reservas'));
    }

    public function create() {
        $pistas = Pista::all();
        return view('reservas.create', compact('pistas'));
    }

    public function show($id) {
        $pistas = Pista::find($id);
        return view('pistas.show', compact('pistas'));
    }

    // Encargado de almacenar en la BD
    public function store(Request $request, $id_pista) {

        $reserva = new Reserva();
        $reserva->email_user = $request->email_user;
        $reserva->id_pista = $id_pista;
        $reserva->franja = $request->franja;

        $reserva->save();

        return redirect()->route('reservas.show', $id_pista); // aquí debería poner $reserva->id() pero Laravel es mu listo

    }
}
