@extends('layouts.app')

@section('content')
<div class="card card-header-actions">
    <div class="card-header">
      <h2>Modelo - Currículum</h2>
     
    </div>
    <div class="card-body">
        <form  role="form" method="POST" enctype="multipart/form-data" action="{{ route('edit_modelo.update',1) }}">
					  	
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
                    <label class="col-md-12 control-label">Curruculum:</label>
                    </div>
                    <div class="col-md-12">
                      <textarea name="editor1" id="editor1" rows="10" cols="80">
                        {!!$modelo->texto!!}
                    </textarea>
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
