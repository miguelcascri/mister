<?php

namespace App\Http\Controllers;

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
        return view('admin/clasificacion');
    }

    public function storeplayer(Request $request){
        $player = new Player();
        $player->nombre = $request->input('nombre');
        $player->apellidos = $request->input('apellidos');
        $player->save();
        $Allplayer = Player::all();
        return redirect('admin/jugadores')->with(compact('Allplayer'));

    }

    public function editplayer($id){
        $player = player::find($id);
        return view('admin/Editarjugador')->with(compact('player'));
    }

    public function UpdatePlayer(Request $request, $id){
        $player = Player::find($id);

        $player->nombre = $request->input('nombre');
        $player->apellidos = $request->input('apellidos');
        $player->state = $request->input('state');
        
        $player->save();
        $player = Player::all();

        return redirect('admin/jugadores');
    }


}
