@extends('layouts.app')

@section('content')
    <h1 class="mt-4">Mis publicaciones</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Mis publicaciones <br>
            <br>
        <a  href="{{route('mispublicaciones.create')}}" class="btn btn-primary"> <i
                    class="far fa-file-image text-white"></i> Crear publicacion</a>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripción</th>
                            <th>Foto</th>

                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripción</th>
                            <th>Foto</th>

                            <th>Accion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($publicaciones as $item)
                            <tr>
                                <td>{{ $item->titulo }}</td>
                                <td>{!!substr($item->descripcion,0,50) !!}...</td>
                                <td>
                                    <img src="{{ asset($item->foto_portada) }}" class="img-thumbnail text-center" width="130" alt="no encontrado">
                                </td>



                                <td> <a href="{{ route('mispublicaciones.edit', $item->id) }}" class="btn btn-info" 
                                  > <i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#Modal_eliminar-{{ $item->id }}" data-id_eliminar="{{ $item->id }}"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button></td>
                                {{-- @include('areas.modal.modal_destroy') --}}
                                @include('mispublicaciones.modal.modal_destroy')
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection