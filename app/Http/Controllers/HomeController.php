<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index(Request $request)
    // {


    //     $usuario = User::where('email', '=', $request->email)->where('password', '=', $request->password)->get();

    //     if (count($usuario) == 0) {

    //         // El usuario no existe en la BD

    //         return view('index');

    //     } else {

    //         return view('index');
    //         // return redirect()->route('index');

    //         // return view('create.reservas');
    //     }

    // }

    public function __invoke() {
        return view('auth/login');
    }
}
