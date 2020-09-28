<?php

namespace App\Http\Controllers;

use App\evento;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;

class EventosController extends Controller
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
        $eventos = evento::all();
        return view('miseventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('miseventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$id_user = Auth::user()->id;
        if ($request->hasFile('url_imagen')) {

            $img = $request->file('url_imagen');
            $nombre_foto = "evento-" . time() . "." . $img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/eventos/');
            $img->move($destinoPath, $nombre_foto);


            /* guardar url en la base de datos */
            $evento = new evento();
            $evento->titulo = $request->titulo;
            $evento->descripcion = $request->editor1;
            $evento->foto_portada = 'imagenes/eventos/' . $nombre_foto;
            
            $evento->save();
            return redirect('miseventos')->with('success', "Evento creado correctamente");
        } else {
            return redirect('miseventos')->with('error', 'No has seleccionado una imagen');
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
        $evento = evento::find($id);

        return view('miseventos.edit', compact('evento'));
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
       
        $evento = evento::find($id);
        if ($request->hasFile('url_imagen')) {
            if ($evento->foto_portada == null) {
                $checar_img = null;
            } else {
                $checar_img = $evento->foto_portada;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if (file_exists($checar_img)) {
                unlink($checar_img);
            }
            $img = $request->file('url_imagen');
            $nombre_foto = "publicacion-".time().".".$img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/eventos/');
            $img->move($destinoPath, $nombre_foto);


            /* guardar url en la base de datos */

            $evento->titulo = $request['titulo'];
            $evento->descripcion = $request['editor1'];
            $evento->foto_portada = 'imagenes/eventos/'.$nombre_foto;
            $evento->save();
            return redirect('miseventos')->with('info', "Evento Actualizado");
        } else {
            $evento->titulo = $request['titulo'];
            $evento->descripcion = $request['editor1'];
            $evento->save();

            return redirect('miseventos')->with('info', 'Evento actualizado');
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
        $evento = evento::find($id);
        if($evento->foto_portada==null){
            $checar_img = null;
        }else{
            $checar_img =$evento->foto_portada;
        }
        //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
        if(file_exists($checar_img)){
            unlink($checar_img);
            evento::destroy($id);
        }else{
            evento::destroy($id);
        }

        return  redirect('miseventos')->with('success','Se elimino correctamente');
    }
}
