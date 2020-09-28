@extends('layouts.app')

@section('content')
    <div class="card card-header-actions">
        <div class="card-header">
            Perfil

        </div>
        <div class="card-body">

            <center>


            </center>
            <hr>
            <center>
                <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('user.store') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn  btn-primary">
                                Crear usuario
                            </button>
                            <!--button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal"> <i class="far fa-trash-alt"></i>
                                                            Eliminar
                                                            </button-->
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="custom-control custom-checkbox ">
                          <input type="checkbox" name="activar" id="activar" value="1"  class="form-check-input"  >
                          
                          <label class="form-check-label" for="customCheck">  <h3><strong>Activar</strong></h3> </label>

                        </div>
                      </div>

                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="col-md-4 control-label">Nombre:*</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Nombre del docente"
                                required>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="col-md-4 control-label">Email:*</label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Escribe el email del docente o administrativo" required>

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="col-md-4 control-label">Contraseña:*</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="contrasenia" class="form-control" name="contrasenia" value="secret"
                                placeholder="Escribe la contraseña" required>

                        </div>
                    </div>


                    {{-- puesto --}}
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="col-md-4 control-label">Puesto:*</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="puesto" class="form-control" name="puesto"
                                placeholder="Ejemplo. Docente de Español" required>

                        </div>
                    </div>




                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="col-md-4 control-label">Teléfono Célular:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="tel" id="telefono" class="form-control" name="telefono" value=""
                                placeholder="Escribe el número de celular">
                            <small class="text-muted">
                                Este número célular se visualizara en el perfil de docente
                            </small>
                        </div>
                    </div>





                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="col-md-4 control-label">Descripcion:*</label>
                        </div>
                        <div class="col-md-8">
                            <textarea id="descripcion" rows="6" cols="50" class="form-control" name="descripcion"
                                placeholder="Escribe una descripcion de docente o administrativo, lo puede dejar vacio"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="col-md-4 control-label">Facebook:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="facebook" class="form-control" name="facebook"
                                placeholder="Puedes poner la url del perfil de facebook ">

                        </div>
                    </div>





                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="col-md-4 control-label">Foto de perfil:</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" id="url_imagen" class="form-control" name="url_imagen">
                        </div>
                    </div>





                </form>
            </center>
        </div>
    </div>

@endsection
