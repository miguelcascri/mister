<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;
use App\Models\player;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {
        return view('admin/home');
    }

    public function contabilidad()
    {
        return view('admin/contabilidad');
    }

    public function jugadores()
    {
        $Allplayer = Player::All();

        return view('admin/jugadores')->with(compact('Allplayer'));
    }
    public function clasificacion()
    {
        $Allplayer = Player::All();
        // $Alljornadas = Clasificacion::All();

        return view('admin/clasificacion')->with(compact('Allplayer'));
        // return view('admin/clasificacion');
    }

    public function storeplayer(Request $request)
    {
        $player = new Player();
        $player->nombre = $request->input('nombre');
        $player->apellidos = $request->input('apellidos');
        $player->save();
        $Allplayer = Player::all();
        return redirect('/admin/jugadores')->with(compact('Allplayer'));
    }

    public function editplayer($id)
    {
        $player = player::find($id);
        return view('admin/Editarjugador')->with(compact('player'));
    }

    public function UpdatePlayer(Request $request, $id)
    {
        $player = Player::find($id);

        $player->nombre = $request->input('nombre');
        $player->apellidos = $request->input('apellidos');
        $player->state = $request->input('state');

        $player->save();
        $player = Player::all();

        return redirect('admin/jugadores');
    }

    public function nuevajornada(Request $request)
    {
        $jornada = new Clasificacion();
        $jornada->jornada = $request->input('jornada');
        $jornada->puesto12 = $request->input('puesto12');
        ##### PUESTO 12 #####
        $puesto12 = $request->input('puesto12');
        $jugador12 = Player::find($puesto12);
        // dd($jugador);
        $pagoactual=  $jugador12->pagado;
        // dd($pagoactual);
        $pagonuevo =  $pagoactual - 0.50;
        // dd($pagonuevo);
        $jugador12->pagado = $pagonuevo;
        // $jugador-> pagado = $request->input('12puesto');
        $jugador12->save();


        $jornada->puesto13 = $request->input('puesto13');

        #######PUESTO 13 ##########
        $puesto13 = $request->input('puesto13');

        $jugador13 = Player::find($puesto13);
        // dd($jugador);
        $pagoactual=  $jugador13->pagado;
        // dd($pagoactual);
        $pagonuevo =  $pagoactual - 1;

        // dd($pagonuevo);
        $jugador13->pagado = $pagonuevo;
       

        $jugador13->save();


        ##### PUESTO 14 #######3
        $jornada->puesto14 = $request->input('puesto14');
        $puesto14 = $request->input('puesto14');

        
        $jugador14 = Player::find($puesto14);
        // dd($jugador);
        $pagoactual=  $jugador14->pagado;
        // dd($pagoactual);
        $pagonuevo =  $pagoactual - 1;

        // dd($pagonuevo);
        $jugador14->pagado = $pagonuevo;
       

        $jugador14->save();



        $jornada->puesto15 = $request->input('puesto15');
        $puesto15 = $request->input('puesto15');





        $jornada->puesto16 = $request->input('puesto16');
        $puesto16 = $request->input('puesto16');
        
        $jugador16 = Player::find($puesto16);
        // dd($jugador);
        $pagoactual=  $jugador16->pagado;
        // dd($pagoactual);
        $pagonuevo =  $pagoactual - 2;

        // dd($pagonuevo);
        $jugador16->pagado = $pagonuevo;
       

        $jugador16->save();


        $jornada->save();
       


      

    
        
        // $Allplayer = Player::aÇll();
        // return redirect('admin/clasificacion')->with(compact('Allplayer'));
        return redirect('admin/clasificacion');
    }
}
