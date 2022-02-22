<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{

    public function index() {
        $cursos = Reserva::paginate();
        return view('reservas.index', compact('reservas'));
    }

    public function create() {
        return view('reservas.create');
    }

    public function show($id, $categoria = null) {
        $curso = Reserva::find($id);
        return view('reservas.show', compact('reserva', 'categoria'));
    }
}
