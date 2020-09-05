<?php

namespace App\Http\Controllers;

use App\portada;
use Illuminate\Http\Request;
use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('home',compact('user'));
    }
    public function portada(){
        $portada = portada::find(1);
        return view('portada.index',compact('portada'));
    }
    public function portadaUpdate(Request $request, $id){
        return view('portada.index');
    }
}
