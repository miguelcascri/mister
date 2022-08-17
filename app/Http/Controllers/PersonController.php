<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\player;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
    
        $Allplayer = Player::all();
        $ultimajornada = DB::select("SELECT MAX(jornada) as jornada FROM `clasificacion`");
        
        $integer = $ultimajornada[0] -> jornada;
        $playerlast = DB::select("SELECT * FROM `clasificacion` WHERE jornada = $integer ");


        // $jornada = Clasificacion::find(6);
        $Allplayer = player::All();

        $name12 = DB::select("SELECT players.nombre, players.apellidos FROM players, `clasificacion` WHERE clasificacion.jornada = $integer AND players.id = puesto12");
        $name13 = DB::select("SELECT players.nombre, players.apellidos FROM players, `clasificacion` WHERE clasificacion.jornada = $integer AND players.id = puesto13");
        $name14 = DB::select("SELECT players.nombre, players.apellidos FROM players, `clasificacion` WHERE clasificacion.jornada = $integer AND players.id = puesto14");
        $name15 = DB::select("SELECT players.nombre, players.apellidos FROM players, `clasificacion` WHERE clasificacion.jornada = $integer AND players.id = puesto15");
        $name16 = DB::select("SELECT players.nombre, players.apellidos FROM players, `clasificacion` WHERE clasificacion.jornada = $integer AND players.id = puesto16");


        
        return view('/welcome')->with(compact('Allplayer','integer','name12','name13','name14','name15','name16'));
    }

}
