<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Role;

class UserController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->input('activar')){
            $activo = 0;
        }
        else{
            $activo = 1;
        }

        $role_user = Role::where('name', 'docente')->first();
       
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->contrasenia);
        $user->telefono = $request->telefono;
        $user->descripcion= $request->descripcion;
        $user->activar = $activo;
        $user->cargo = $request->puesto;
        $user->facebook = $request->facebook;
        if ($request->hasFile('url_imagen')) {
            $image = $request->file('url_imagen');
            $name = 'fotoDocente'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes/docente/'.$request->email."/");
            $image->move($destinationPath, $name);
            $user->url_imagen = $request->root().'/imagenes/docente/'.$request->email."/".$name;
        }
        $user->save();
        $user->roles()->attach($role_user);
        

        /* 
         $table->text('descripcion')->nullable();
            $table->string('telefono')->nullable();
            $table->text('facebook')->nullable();
            $table->string('url_imagen')->nullable(); */
        return redirect('home')->with('success','Fue creado correctamente');
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
        $user = User::find($id);
        return view('user.edit',compact('user'));
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
        if(!$request->input('activar')){
            $activo = 0;
        }
        else{
            $activo = 1;
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->contrasenia){
            $user->password = bcrypt($request->contrasenia);
        }
        $user->activar =$activo;/* activar usuario */
        $user->telefono = $request->telefono;
        $user->descripcion= $request->descripcion;
        $user->cargo = $request->puesto;
        $user->facebook = $request->facebook;
        if ($request->hasFile('url_imagen')) {
            if ($user->url_imagen == null) {
                $checar_img = null;
            } else {
                $checar_img = $user->url_imagen;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if (file_exists($checar_img)) {
                unlink($checar_img);
            }
            $image = $request->file('url_imagen');
            $name = 'fotoDocente'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes/docente/'.$user->email."/");
            $image->move($destinationPath, $name);
            $user->url_imagen = 'imagenes/docente/'.$user->email."/".$name;
        }
        $user->save();
       return redirect('home')->with('info','Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect("home")->with('success','Se ha eliminado correctamente');
    }


    /* editar perfil  */

    public function edit_perfil(){
        return view('perfiles.edit_perfil');
    }

    public function update_perfil(Request $request, $id)
    {
        $user = User::find($id);
        

        if($request->contrasenia){
            $user->password = bcrypt($request->contrasenia);
        }
        $user->telefono = $request->telefono;
        $user->descripcion= $request->descripcion;
        $user->facebook = $request->facebook;
        if ($request->hasFile('url_imagen')) {

            if ($user->url_imagen == null) {
                $checar_img = null;
            } else {
                $checar_img = $user->url_imagen;
            }
            //$checar_img = str_replace($request->root(),'',$portada->url_imagen);
            if (file_exists($checar_img)) {
                unlink($checar_img);
            }



            $image = $request->file('url_imagen');
            $name = 'fotoDocente'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes/docente/'.$user->email."/");
            $image->move($destinationPath, $name);
            $user->url_imagen = 'imagenes/docente/'.$user->email."/".$name;
        }
        $user->save();
       return redirect('home')->with('info','Datos actualizados correctamente');
    }
}
