@extends('layouts.app')

@section('content')
<div class="card card-header-actions">
    <div class="card-header">
        Perfil
     
    </div>
    <div class="card-body">
    
                    <center>
                        @if(Auth::user()->foto_url=="null")
                        <img src="{{ asset('assets/img/envato.jpg')}} " name="aboutme"  border="0" class="img-responsive img-profile rounded-circle" width="200"></a>
                        @else
                        <img src="{{ Auth::user()->url_imagen }}" name="aboutme"   border="0" class="img-responsive img-profile rounded-circle" width="200"></a>
                        @endif
                            <h3 class="media-heading">{{ Auth::user()->name }} </h3>
                   
                    </center>
                    <hr>
                    <center>
                    <form  role="form" method="POST" enctype="multipart/form-data" action="{{ route('users.actualizar', Auth::user()->id) }}">
					  	<input type="hidden" name="_method" value="PUT">
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
                    <div class="input-group-prepend">
                    <label class="col-md-4 control-label">Nombre:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id ="name" class="form-control" name="name" value="{{ Auth::user()->email }}" placeholder="Escribe el email valido de la tienda" required>
                        
                    </div>
                </div>
             
                
                <div class="form-group">
                    <div class="input-group-prepend">
                    <label class="col-md-4 control-label">Email:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="email" id ="email" class="form-control" name="email" value="" placeholder="Escribe el email valido de la tienda" required>
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                    <label class="col-md-4 control-label">Teléfono Célular:*</label>
                    </div>
                    <div class="col-md-8">
                        <input type="tel" id ="telefono" class="form-control" name="telefono" value="" placeholder="Escribe el número de celular" required>
                        <small  class="text-muted">
                        Este número célular se visualizara en el pérfil de docente 
                        </small>
                    </div>
                </div>
               
                
                


                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Descripcion:*</label>
                  </div>
                  <div class="col-md-8">
                  <textarea  id="descripcion"  rows="5" cols="50" class="form-control" name="descripcion" placeholder="Escribe una descripcion de la tienda"  required>{{ Auth::user()->descripcion}}</textarea>
                  </div>
                </div>
                

                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Direccion:*</label>
                  </div>
                  <div class="col-md-8">
                  <textarea  id="direccion"  rows="5" cols="50" class="form-control" name="direccion" placeholder="Escribe una dirección donde pasarían tus clientes a recoger su pedido"  required>{{ Auth::user()->direccion}}</textarea>
                  </div>
                </div> 

   <!-- Mapa -->
              
                <div class="form-group">
                  <div class="input-group-prepend">
                    <label class="col-md-4 control-label">Localiza tu direccion en el mapa*</label>
                    </div>
                    <div class="col-md-8">
                      <div class="map-responsive">
                      <div id="mapa" style="width: 450px; height: 350px;"> </div>
                    </div>
                      <input type="hidden" id ="lat" class="form-control" name="lat" value="" placeholder="Como se llama la tienda" required>
                      <input type="hidden" id ="long" class="form-control" name="long" value="" placeholder="Como se llama la tienda" required>
                    </div>
                </div>

                <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Imagen de portada:*</label>
                  </div>
                  <div class="col-md-8">
                  <input type="file" id="url_imagen"  class="form-control" name="url_imagen"   >
                  </div>
                </div> 

               
                
                  
                             
              </form>
                    </center>    
    </div>
</div>

@endsection