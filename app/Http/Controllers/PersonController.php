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
        return view('/welcome')->with(compact('Allplayer'));
    }

}
