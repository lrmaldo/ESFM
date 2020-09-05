<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\configuracion;
class InicioController extends Controller
{
    public function index()
    {
        //$user = User::all();
        $configuracion = configuracion::find(1)->first();
        return view('welcome',compact('configuracion'));
    }

    public function conoce(){
        return view('conoce');
    }
    public function modelo(){
        return view('modelo');
    }
}
