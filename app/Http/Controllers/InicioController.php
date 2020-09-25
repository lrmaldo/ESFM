<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\configuracion;
use App\conoce;
use App\evento;
use App\horario;
use App\modelo;
use App\publicaciones;

class InicioController extends Controller
{
    public function index()
    {
        //$user = User::all();
        $configuracion = configuracion::find(1)->first();
        return view('welcome',compact('configuracion'));
    }

    public function conoce(){
        $areas = conoce::all();
        return view('conoce',compact('areas'));
    }
    public function modelo(){
        $horarios = horario::all();
        $modelo = modelo::find(1);
        return view('modelo',compact('horarios','modelo'));
    }

    public function publicaciones(){
        $publicaciones = publicaciones::all();
        return view('publicaciones',compact('publicaciones'));
    }

    public function eventos(){
        $eventos = evento::all();
        return view('eventos',compact('eventos'));
    }

    /* post  */
    public function publicacion($id){
        if(is_null(publicaciones::find($id))){
            return "no se encontro la publicacion";
        }

        $publicacion = publicaciones::where('id',$id)->first();
        return view('publicacion',compact('publicacion'));
    }
}
