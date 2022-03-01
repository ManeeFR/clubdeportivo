<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Pista;

class PistaController extends Controller
{
    public function index() {
        $pistas = Pista::all();
        $cont = 0;
        $imagenes = ['img/post/padel_01.webp','img/post/padel_02.jpg','img/post/padel_03.jpg','img/post/padel_04.jpg','img/post/padel_05.jpg','img/post/padel_06.jpg'];
        return view('pistas.index', compact('pistas', 'imagenes', 'cont'));
    }

    public function show($id) {
        $pistas = Pista::find($id);
        return view('pistas.show', compact('pistas'));
    }
}
