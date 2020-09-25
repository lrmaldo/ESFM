<?php

namespace App\Http\Controllers;

use App\publicaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MispublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = publicaciones::where('id_usuario',Auth::user()->id)->get();

        return view('mispublicaciones.index',compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mispublicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = Auth::user()->id;
        if($request->hasFile('url_imagen')){
            
            $img = $request->file('url_imagen');
            $nombre_foto = "publicacion-".time().".".$img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/publicacion/'.$id_user."/");
            $img->move($destinoPath,$nombre_foto);


            /* guardar url en la base de datos */
            $post = new publicaciones();
            $post->titulo = $request->titulo;
            $post->descripcion = $request->editor1;
            $post->foto_portada = 'imagenes/publicacion/'.$id_user."/".$nombre_foto;
            $post->id_usuario = $id_user;
            $post->save();
            return redirect('mispublicaciones')->with('success',"Horario creado");
        
    }else{
        return redirect('mispublicaciones')->with('error','No has seleccionado una imagen');
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
        $publicacion = publicaciones::find($id);
        return view('mispublicaciones.edit',compact('publicacion'));
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
        $id_user = Auth::user()->id;
        $post = publicaciones::find($id);
        if ($request->hasFile('url_imagen')) {
            if ($post->foto_portada == null) {
                $checar_img = null;
            } else {
                $checar_img = $post->foto_portada;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if (file_exists($checar_img)) {
                unlink($checar_img);
            }
            $img = $request->file('url_imagen');
            $nombre_foto = "publicacion-".time().".".$img->getClientOriginalExtension();
            $destinoPath = public_path('/imagenes/publicacion/'.$id_user."/");
            $img->move($destinoPath, $nombre_foto);


            /* guardar url en la base de datos */

            $post->titulo = $request['titulo'];
            $post->descripcion = $request['editor1'];
            $post->foto_portada = 'imagenes/publicacion/'.$id_user."/".$nombre_foto;
            $post->save();
            return redirect('mispublicaciones')->with('info', "publicacion Actualizado");
        } else {
            $post->titulo = $request['titulo'];
            $post->descripcion = $request['editor1'];
            $post->save();

            return redirect('mispublicaciones')->with('info', 'publicacion actualizados');
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
        $post = publicaciones::find($id);
        if($post->foto_portada==null){
            $checar_img = null;
        }else{
            $checar_img =$post->foto_portada;
        }
        //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
        if(file_exists($checar_img)){
            unlink($checar_img);
            publicaciones::destroy($id);
        }else{
            publicaciones::destroy($id);
        }

        return  redirect('mispublicaciones')->with('success','Se elimino correctamente');
    
    }
}
