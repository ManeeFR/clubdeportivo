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
}
