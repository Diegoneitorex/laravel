<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;

class MainController extends Controller
{
    public function index(Request $request){
        return view('main.index');
    }

    public function create(Request $request){
        $jugador=new Jugador();
        $jugador->name = $request->name;
        $jugador->email = $request->email;
        $jugador->age = $request->age;
        $jugador->save();
        return redirect('/listar');
    }

    public function listar(Request $request){
        $jugadores = Jugador::all();
        return view('main.listar',['jugadores'=>$jugadores]);
    }

    public function delete(Request $request, Jugador $jugador){
        $jugador->delete();
        return redirect('/listar');
    }
}
