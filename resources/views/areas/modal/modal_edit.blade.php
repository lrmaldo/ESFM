{{-- modal de importacion de excel --}}
<div class="modal fade" id="ModalEdit-{{$item->id}}" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Área</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formfile" class="form-horizontal" role="form" method="POST"
                action="{{ route('areas.update',$item->id) }}" enctype="multipart/form-data">
                
                <div class="modal-body">
                    Actualiza los datos
                    {{-- <input type="hidden" name="_method" value="DELETE">
                    --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input name="_method" type="hidden" value="PUT">
                    <div class="form-group">
                        <div class="input-group-prepend">
                        <label class="col-md-4 control-label">Título:*</label>
                        </div>
                        <div class="col-md-12">
                        <input type="text" id ="titulo{{$item->id}}" class="form-control" name="titulo{{$item->id}}" value="{{$item->titulo}}"  placeholder="Escribe un titulo ejem. 1er Grado" required>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                        <label class="col-md-4 control-label">Descripción:*</label>
                        </div>
                        <div class="col-md-12">
                        <textarea name="descripcion{{$item->id}}" id="descripcion{{$item->id}}" class="form-control" cols="50" rows="5" placeholder="Describe esta área" required>{{$item->descripcion}}</textarea>                          
                            
                        </div>
                    </div>
                    <div class="form-group">
                       
                    <input type="file" class="form-control" name="url_imagen{{$item->id}}" id="url_imagen{{$item->id}}" 
                        accept="image/png, image/jpeg" />
                    </div>

                </div>
                <div class="modal-footer">
                    <input class="btn btn-info btn-xs" type="submit" value="Actualizar" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>
        </div>
    </div>
</div>