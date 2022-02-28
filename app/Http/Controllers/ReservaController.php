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

    public function welcome(Request $request) {

        if (isset($request->email)) {

            $usuario = User::where('email', '=', $request->email)->where('password', '=', $request->password)->get();

            if (count($usuario) == 0) {

                return redirect()->route('login');
                // AQUI FALTARÍA QUE CUANDO SE HAYA EQUIVOCADO AL ESCRIBIR LA CLAVE O EL EMAIL QUE SE MUESTRE UN MENSAJE AL CLIENTE

            } else {
                return view('welcome');
            }

        } else {
            return view('welcome');
        }
    }

    public function show($id)
    {
        $pista = Pista::find($id);
        $fecha = getdate();
        $fecha1 = $fecha['year']."/".$fecha['mon']."/".$fecha['mday'];
        $franjas = ["9:00-10:30", "10:30-12:00", "12:00-13:30", "16:00-17:30", "17:30-19:00", "19:00-20:30"];
        $reservadas = [];
        $dias = [date("Y/m/d", strtotime("now")), date("Y/m/d", strtotime("+1 days")), date("Y/m/d", strtotime("+2 days"))];

        for ($i=0; $i < 3; $i++) {
            for ($j=0; $j < count($franjas); $j++) {
                $consulta = Reserva::where('id_pista', '=', $id)->where('franja', '=', $franjas[$j])
                                   ->where('fecha', '=', $dias[$i])->get();
                if (count($consulta) == 0) {
                    $reservadas[$i][$j] = false;

                } else {
                    $reservadas[$i][$j] = true;
                }
            }
        }
        // echo (json_encode($franjas));



        return view('pistas.show', compact('pista', 'franjas', 'reservadas', 'dias'));
    }

    // Encargado de almacenar en la BD
    // Mediante request recuperamos todos los datos introducidos en el formulario.
    public function store(Request $request, $id_pista)
    {

        // $consulta = Reserva::where('id_pista', '=', $id_pista)->where('franja', '=', $request->franja)
        // ->where('dia', '=', $request->dia)->where('mes', '=', $request->mes)->get();

        $consulta = Reserva::where('id_pista', '=', $id_pista)->where('franja', '=', $request->franja)
        ->where('fecha', '=', $request->fecha)->get();

        if (count($consulta) == 0) {
            $reserva = new Reserva();
            $reserva->email_user = $request->email_user;
            $reserva->id_pista = $id_pista;
            $reserva->franja = $request->franja;
            $reserva->fecha = $request->fecha;
            // $reserva->dia = $request->dia;
            // $reserva->mes = $request->mes;

            $reserva->save();
        } else {
            /**
             * Aquí habría que poner un route() o algo que indique que esa pista a esa hora y día ya está reservada
             */
        }

        return redirect()->route('reservas.show', $id_pista);

    }

    public function checkUser(Request $request)
    {


        $usuario = User::where('email', '=', $request->email)->where('password', '=', $request->password)->get();

        if (count($usuario) == 0) {

            // El usuario no existe en la BD

            // return view('index');
            // $pistas = Pista::all();
            // return view('reservas.create', compact('pistas'));

        } else {

            return redirect()->route('home');
            // return view('home');
            // return redirect()->route('index');

            // return view('create.reservas');
            // $pistas = Pista::all();
            // return view('reservas.create', compact('pistas'));
        }

    }
}
