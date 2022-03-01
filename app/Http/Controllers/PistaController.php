<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pista;

session_start();

class PistaController extends Controller
{
    public function index() {
        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            $pistas = Pista::all();
            $cont = 0;
            $imagenes = ['img/post/padel_01.webp','img/post/padel_02.jpg','img/post/padel_03.jpg','img/post/padel_04.jpg','img/post/padel_05.jpg','img/post/padel_06.jpg'];
            return view('pistas.index', compact('pistas', 'imagenes', 'cont'));
        } else {
            return redirect()->route('login');
        }
    }

    public function show($id) {
        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            $pistas = Pista::find($id);
            return view('pistas.show', compact('pistas'));
        } else {
            return redirect()->route('login');
        }
    }


    public function welcome(Request $request) {

        if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($request->email) && !isset($request->password)) {
            return redirect()->route('login');
        } else if (isset($_SESSION['email']) && isset($_SESSION['password']) && !isset($request->email) && !isset($request->password)) {

            $usuario = User::where('email', '=', $_SESSION['email'])->where('password', '=', $_SESSION['password'])->get();

            if (count($usuario) == 0) { return redirect()->route('login');

            } else { return view('welcome'); }

        } else if (isset($request->email) && isset($request->password)) {

            $usuario = User::where('email', '=', $request->email)->where('password', '=', $request->password)->get();

            if (count($usuario) == 0) {

                return redirect()->route('login');
                

            } else {
                $_SESSION['email'] = $request->email;
                $_SESSION['password'] = $request->password;
                return view('welcome');
            }

        } else { return redirect()->route('login'); }
        return redirect()->route('pageError');
    }

    public function gallery() {
        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            return view('gallery');
        } else {
            return redirect()->route('login');
        }
    }

    public function pageError() {
        return view('pageError');
    }
}
