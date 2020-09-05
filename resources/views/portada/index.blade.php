@extends('layouts.app')

@section('content')
<div class="card card-header-actions">
    <div class="card-header">
      <h2>Portada</h2>
     
    </div>
    <div class="card-body">
        <form  role="form" method="POST" enctype="multipart/form-data" action="{{ route('portada.update',1) }}">
					  	
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ method_field('PUT') }}
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

              <div class="form-group">
                <div class="input-group-prepend">
                  <label class="col-md-4 control-label">Foto de portada:</label>
                  </div>
                  <div class="col-md-8">
                  <input type="file" id="url_imagen"  class="form-control" name="url_imagen"   >
                  </div>
                </div> 
              
        </form>

    </div>
</div>
@endsection
