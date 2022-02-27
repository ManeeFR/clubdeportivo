<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Pista;

class PistaController extends Controller
{
    public function index() {
        $pistas = Pista::all();
        return view('pistas.index', compact('pistas'));
    }

    public function show($id) {




        $pistas = Pista::find($id);
        return view('pistas.show', compact('pistas'));
    }
}
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
}
