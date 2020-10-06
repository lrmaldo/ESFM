<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\configuracion;
use App\conoce;
use App\evento;
use App\horario;
use App\modelo;
use App\publicaciones;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Mail;

class InicioController extends Controller
{
    public function index()
    {
        //$user = User::all();
        $docentes = Role::where('name', 'docente')->first()->users()->where('activar', '=', 1)->get();
        $directores = Role::where('name', 'director')->first()->users()->get();
        $configuracion = configuracion::find(1)->first();
        return view('welcome', compact('configuracion', 'docentes', 'directores'));
    }

    public function conoce()
    {
        $areas = conoce::orderBy('id', 'desc')->paginate(8);
        return view('conoce', compact('areas'));
    }
    public function modelo()
    {
        $horarios = horario::all();
        $modelo = modelo::find(1);
        return view('modelo', compact('horarios', 'modelo'));
    }

    public function publicaciones()
    {
        $publicaciones = publicaciones::orderBy('id', 'desc')->paginate(8);
        return view('publicaciones', compact('publicaciones'));
    }

    public function eventos()
    {
        $eventos = evento::orderBy('id', 'desc')->paginate(8);
        return view('eventos', compact('eventos'));
    }

    /* post  */
    public function publicacion($id)
    {
        if (is_null(publicaciones::find($id))) {
            return "no se encontro la publicacion";
        }

        $publicacion = publicaciones::where('id', $id)->first();
        return view('publicacion', compact('publicacion'));
    }

    /* evento */
    /* post  */
    public function evento($id)
    {
        if (is_null(evento::find($id))) {
            return "no se encontro el evento";
        }

        $evento = evento::where('id', $id)->first();
        return view('evento', compact('evento'));
    }

    public function galeria()
    {
        $galerias = \App\galeria::orderBy('id', 'desc')->paginate(8);
        return view('galeria', compact('galerias'));
    }

    public function perfil($id)
    {
        if (is_null(User::find($id))) {
            return "no se encontro el evento";
        }

        $docente = User::where('id', $id)->first();
        return view('perfil', compact('docente'));
    }

    public function contacto_form(Request $request){

        $subject = "Nuevo Mensaje esfm.com.mx";
        /* $for= "lrmaldo@gmail.com"; */
        $for= "JdD_CUV@hotmail.com";
        //$for = Auth::user()->email;
        $mensaje = array(
          'nombre' =>$request->name,
          'correo'=>$request->email,
          'telefono' => $request->phone,
          'mensaje'=> $request->message,
        );
        Mail::send('mail.mail',$mensaje, function($msj) use($subject,$for){
            $msj->from("soporte@esfm.com.mx","Soporte ESFM");
            $msj->subject($subject);
            $msj->to($for);
        });
        return response()->json(true);
       }

    
}
