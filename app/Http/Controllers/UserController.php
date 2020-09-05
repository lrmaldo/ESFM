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
        $role_user = Role::where('name', 'docente')->first();
       
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->contrasenia);
        $user->telefono = $request->telefono;
        $user->descripcion= $request->descripcion;
        $user->facebook = $request->facebook;
        if ($request->hasFile('url_imagen')) {
            $image = $request->file('url_imagen');
            $name = 'fotoDocente'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes/docente/'.$request->name."/");
            $image->move($destinationPath, $name);
            $user->url_imagen = $request->root().'/imagenes/docente/'.$request->name."/".$name;
        }
        $user->save();
        $user->roles()->attach($role_user);
        

        /* 
         $table->text('descripcion')->nullable();
            $table->string('telefono')->nullable();
            $table->text('facebook')->nullable();
            $table->string('url_imagen')->nullable(); */
        return redirect('home');
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->contrasenia){
            $user->password = bcrypt($request->contrasenia);
        }
        $user->telefono = $request->telefono;
        $user->descripcion= $request->descripcion;
        $user->facebook = $request->facebook;
        if ($request->hasFile('url_imagen')) {
            $image = $request->file('url_imagen');
            $name = 'fotoDocente'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes/docente/'.$request->name."/");
            $image->move($destinationPath, $name);
            $user->url_imagen = $request->root().'/imagenes/docente/'.$request->name."/".$name;
        }
        $user->save();
       return redirect('home');
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
        return redirect("home");
    }
}
