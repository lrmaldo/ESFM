@extends('layouts.app')

@section('content')
<div class="card card-header-actions">
    <div class="card-header">
      <h2>Configuración</h2>
     
    </div>
    <div class="card-body">
        <form  role="form" method="POST" enctype="multipart/form-data" action="{{ route('configuracion.update',1) }}">
					  	
          <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn  btn-primary">
                    Guardar
                  </button>
                  <!--button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal"> <i class="far fa-trash-alt"></i>
                                                      Eliminar
                                                      </button-->
                </div>
              </div>
             {{--  <div class="text-center">
              <img src="{{asset($portada->url)}}" class="rounded" width="200" alt="no encontrado">
              </div> --}}

              <div class="form-group">
                <div class="input-group-prepend">
                <label class="col-md-4 control-label">Correo:*</label>
                </div>
                <div class="col-md-8">
                <input type="text" id ="correo" class="form-control" name="correo" value="{{$config->correo}}" placeholder="Escribe el email de la institución" required>
                    
                </div>
            </div>

            {{-- telefono --}}
            <div class="form-group">
                <div class="input-group-prepend">
                <label class="col-md-4 control-label">Teléfono:*</label>
                </div>
                <div class="col-md-8">
                <input type="text" id ="telefono" class="form-control" name="telefono" value="{{$config->telefono}}" placeholder="Escribe el telefono de la institución" required>
                    
                </div>
            </div>

              <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Quienes somos:*</label>
                  </div>
                  <div class="col-md-8">
                  <textarea  id="quienes"  rows="5" cols="50" class="form-control" name="quienes" placeholder="Escribe un texto"  >{{$config->quienes}}</textarea>
                  </div>
              </div>

              {{-- mision --}}
              <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Mision:*</label>
                  </div>
                  <div class="col-md-8">
                  <textarea  id="mision"  rows="5" cols="50" class="form-control" name="mision" placeholder="Escribe un texto "  >{{$config->mision}}</textarea>
                  </div>
                </div>

                {{-- vision --}}

                <div class="form-group">
                    <div class="input-group-prepend">
                      <label class="col-md-4 control-label">Vision:*</label>
                      </div>
                      <div class="col-md-8">
                      <textarea  id="vision"  rows="5" cols="50" class="form-control" name="vision" placeholder="Escribe un texto"  >{{$config->vision}}</textarea>
                      </div>
                 </div>
              
        </form>

    </div>
</div>
@endsection
