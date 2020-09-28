<?php

namespace App\Http\Controllers;

use App\configuracion;
use App\portada;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->hasRole('director') ||Auth::user()->hasRole('admin') ){
            $user = User::all();
            return view('home',compact('user'));

        }else{
            return redirect('mispublicaciones');
        }
    }
    public function portada(){
        $portada = portada::find(1);
        return view('portada.index',compact('portada'));
    }
    public function portadaUpdate(Request $request, $id){
        if($request->hasFile('url_imagen')){
            $portada = portada::find(1);
            if($portada->url==null){
                $checar_img = null;
            }else{
                $checar_img = $portada->url;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if(file_exists($checar_img)){
                unlink($checar_img);
            }
                $img = $request->file('url_imagen');
                $nombre_foto = "portada-".time().".".$img->getClientOriginalExtension();
                $destinoPath = public_path('/imagenes/portada/');
                $img->move($destinoPath,$nombre_foto);


                /* guardar url en la base de datos */
                $portada->url = 'imagenes/portada/'.$nombre_foto;
                $portada->save();
                return redirect('portada')->with('info',"Pordada Actualizado");
            
        }else{
            return redirect('portada')->with('error','No has seleccionado una imagen');
        }
        /* return view('portada.index'); */
    }

    public function configuracion(){
        $config = configuracion::find(1);
        return view('configuracion.index',compact('config'));
    }

    public function update_configuracion( Request $request, $id){
        $config = configuracion::find(1);
        $config->telefono = $request->telefono;
        $config->correo = $request->correo;
        $config->quienes = $request->quienes;
        $config->mision = $request->mision;
        $config->vision = $request->vision;
        $config->save();

        return redirect('configuracion')->with('info','Datos actualizados correctamente');
    }

}
