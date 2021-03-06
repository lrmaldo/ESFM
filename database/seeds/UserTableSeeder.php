<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\configuracion;
use App\portada;
use App\conoce;
use App\modelo;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'docente')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_direc = Role::where('name','director')->first();
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->cargo = 'Docente de español';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'lrmaldo@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Juan de Dios';
        $user->email = 'JdD_CUV@hotmail.com';
        $user->cargo = 'Director';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_direc);

        /* JdD_CUV@hotmail.com  */

        $configuracion = new configuracion();
        $configuracion->nombre = 'null';
        $configuracion->quienes = 'null';
        $configuracion->mision = "null";
        $configuracion->vision = 'null';
        $configuracion->correo= 'null';
        $configuracion->telefono ='null';
        $configuracion->save();

        /* portada */
        $portada = new portada();
        $portada->titulo = null;
        $portada->url = 'img/portada.jpg';
        $portada->save();
       
       

        /* modelo */
        $modelo = new modelo();
        $modelo->texto = null;
        $modelo->save();
        
        /*  
           $table->increments('id');
            $table->string('nombre')->nullable();
            $table->text('quienes')->nullnable()->comment('quienes somos');
            $table->text('mision')->nullable();
            $table->text('vision')->nullable();
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->timestamps();
        */
    }
}
