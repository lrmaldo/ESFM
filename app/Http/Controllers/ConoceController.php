<?php

namespace App\Http\Controllers;

use App\conoce;
use Illuminate\Http\Request;

class ConoceController extends Controller
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
        $areas = conoce::all();

        return view('areas.index', compact('areas'));
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
        if ($request->hasFile('url_imagen')) {

            $img = $request->file('url_imagen');
            $nombre_foto = "area-" . $request->titulo . time() . "." . $img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/area/');
            $img->move($destinoPath, $nombre_foto);


            /* guardar url en la base de datos */
            $area = new  conoce();
            $area->titulo = $request->titulo;
            $area->descripcion = $request->descripcion;
            $area->url_imagen = 'imagenes/area/' . $nombre_foto;
            $area->save();
            return redirect('areas')->with('success', "Área creado correctamente");
        } else {
            return redirect('areas')->with('error', 'No has seleccionado una imagen');
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
        $area = conoce::find($id);
        if ($request->hasFile('url_imagen' . $id)) {
            if ($area->url_imagen == null) {
                $checar_img = null;
            } else {
                $checar_img = $area->url_imagen;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if (file_exists($checar_img)) {
                unlink($checar_img);
            }
            $img = $request->file('url_imagen' . $id);
            $nombre_foto = "portada-" . time() . "." . $img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/area/');
            $img->move($destinoPath, $nombre_foto);


            /* guardar url en la base de datos */

            $area->titulo = $request['titulo' . $id];
            $area->descripcion = $request['descripcion' . $id];
            $area->url_imagen = 'imagenes/area/' . $nombre_foto;
            $area->save();
            return redirect('areas')->with('info', "Horario Actualizado");
        } else {
            $area->titulo = $request['titulo' . $id];
            $area->descripcion = $request['descripcion' . $id];
            $area->save();

            return redirect('areas')->with('info', 'Área actualizado');
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
        $area = conoce::find($id);
        if($area->url_imagen==null){
            $checar_img = null;
        }else{
            $checar_img = $area->url_imagen;
        }
        //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
        if(file_exists($checar_img)){
            unlink($checar_img);
            conoce::destroy($id);
        }else{
            conoce::destroy($id);
        }

        return  redirect('areas')->with('success','Se elimino correctamente');
    }
}
