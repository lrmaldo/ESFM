<?php

namespace App\Http\Controllers;

use App\galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         $galerias = galeria::all();
         return view('galeria.index',compact('galerias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('url_imagen')) {

            $img = $request->file('url_imagen');
            $nombre_foto = "foto-" . $request->titulo . time() . "." . $img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/galeria/');
            $img->move($destinoPath, $nombre_foto);


            /* guardar url en la base de datos */
            $galeria = new  galeria();
            $galeria->titulo = $request->titulo;
            $galeria->url_imagen = 'imagenes/galeria/' . $nombre_foto;
            $galeria->save();
            return redirect('migaleria')->with('success', "Foto guardado correctamente");
        } else {
            return redirect('migaleria')->with('error', 'No has seleccionado una imagen');
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
        $galeria = galeria::find($id);
        if ($request->hasFile('url_imagen' . $id)) {
            if ($galeria->url_imagen == null) {
                $checar_img = null;
            } else {
                $checar_img = $galeria->url_imagen;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if (file_exists($checar_img)) {
                unlink($checar_img);
            }
            $img = $request->file('url_imagen' . $id);
            $nombre_foto = "foto-" . time() . "." . $img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/galeria/');
            $img->move($destinoPath, $nombre_foto);


            /* guardar url en la base de datos */

            $galeria->titulo = $request['titulo' . $id];
            
            $galeria->url_imagen = 'imagenes/galeria/' . $nombre_foto;
            $galeria->save();
            return redirect('migaleria')->with('info', "Foto actualizado");
        } else {
            $galeria->titulo = $request['titulo' . $id];
            $galeria->descripcion = $request['descripcion' . $id];
            $galeria->save();

            return redirect('galeria')->with('info', 'Foto actualizado');
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
        $galeria = galeria::find($id);
        if($galeria->url_imagen==null){
            $checar_img = null;
        }else{
            $checar_img = $galeria->url_imagen;
        }
        //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
        if(file_exists($checar_img)){
            unlink($checar_img);
            galeria::destroy($id);
        }else{
            galeria::destroy($id);
        }

        return  redirect('migaleria')->with('success','Se elimino la foto correctamente');
    }
}
