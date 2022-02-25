<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
