
    <!-- Modal -->
    <div class="modal fade" id="Modal_eliminar-{{$item->id}}" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Esta seguro que desea eliminar este usuario?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <form id="formdestroy" class="form-horizontal" role="form" method="post"
                        action="{{ route('user.destroy', $item->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                       
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{-- {{ method_field('DELETE') }} --}}
                        <input class="btn btn-danger btn-xs" type="submit" value="Eliminar" />
                        
                    </form>


                </div>
            </div>
        </div>
    </div>