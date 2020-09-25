@extends('layouts.app')

@section('content')
<div class="card card-header-actions">
    <div class="card-header">
      <h2>Mi publicación</h2>
     
    </div>
    <div class="card-body">
        <form  role="form" method="POST" enctype="multipart/form-data" action="{{ route('mispublicaciones.update',$publicacion->id) }}">
					  	
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
              <div class="text-center">
                <div class="form-group">
                    <div class="input-group-prepend">
                        <label class="col-md-12 control-label">Imagen de portada:*</label>
                        </div>   
                    <input type="file" class="form-control" name="url_imagen" 
                        accept="image/png, image/jpeg"  />
                </div>

                <div class="form-group">
                    <div class="input-group-prepend">
                    <label class="col-md-12 control-label">Título:*</label>
                    </div>
                    <div class="col-md-12">
                    <input type="text" id ="titulo" class="form-control" name="titulo" value="{{$publicacion->titulo}}"  placeholder="Escribe un titulo" required>
                        
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group-prepend">
                    <label class="col-md-12 control-label">Descripción:</label>
                    </div>
                    <div class="col-md-12">
                    <textarea name="editor1" id="editor1" rows="20" cols="80">{!!$publicacion->descripcion!!}</textarea>
                    </div>
                  </div> 
             
              </div>
              
        </form>
        <script>
          // Replace the <textarea id="editor1"> with a CKEditor 4
          // instance, using default configuration.
          CKEDITOR.replace( 'editor1' );
          CKEDITOR.editorConfig = function( config ) {
              config.language = 'es';
              config.uiColor = '#F7B42C';
              config.height = 300;
              config.toolbarCanCollapse = true;
            };
      </script>


    </div>
</div>
@endsection