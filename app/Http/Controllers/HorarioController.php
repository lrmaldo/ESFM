<?php

namespace App\Http\Controllers;

use App\horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = horario::all();

        return view('horarios.index',compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('url_imagen')){
            
                $img = $request->file('url_imagen');
                $nombre_foto = "portada-".time().".".$img->getClientOriginalExtension();
                $destinoPath = public_path('/imagenes/horarios/');
                $img->move($destinoPath,$nombre_foto);


                /* guardar url en la base de datos */
                $horario = new horario();
                $horario->titulo = $request->titulo;
                $horario->url_imagen = 'imagenes/horarios/'.$nombre_foto;
                $horario->save();
                return redirect('horarios')->with('success',"Horario creado");
            
        }else{
            return redirect('horarios')->with('error','No has seleccionado una imagen');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horario = horario::find($id);
        if($request->hasFile('url_imagen'.$id)){
            if($horario->url_imagen==null){
                $checar_img = null;
            }else{
                $checar_img = $horario->url_imagen;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if(file_exists($checar_img)){
                unlink($checar_img);
            }
            $img = $request->file('url_imagen'.$id);
            $nombre_foto = "portada-".time().".".$img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/horarios/');
            $img->move($destinoPath,$nombre_foto);


            /* guardar url en la base de datos */
            
            $horario->titulo = $request['titulo'.$id];
            $horario->url_imagen = 'imagenes/horarios/'.$nombre_foto;
            $horario->save();
            return redirect('horarios')->with('info',"Horario Actualizado");
        
    }else{
        $horario->titulo = $request['titulo'.$id];
        $horario->save();

        return redirect('horarios')->with('info','Horario actualizados');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $horario = horario::find($id);
            if($horario->url_imagen==null){
                $checar_img = null;
            }else{
                $checar_img = $horario->url_imagen;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if(file_exists($checar_img)){
                unlink($checar_img);
                horario::destroy($id);
            }else{
                horario::destroy($id);
            }

            return  redirect('horarios')->with('success','Se elimino correctamente');
    }
}
