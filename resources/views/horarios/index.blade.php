@extends('layouts.app')

@section('content')
    <h1 class="mt-4">Horarios</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Tabla Usuarios <br>
            <a data-toggle="modal" data-target="#ModalCreate" class="btn btn-primary"> <i
                    class="far fa-file-image text-white"></i> Crear horario</a>
            @include('horarios.modal.modal_create')
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Foto</th>

                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Titulo</th>
                            <th>Foto</th>

                            <th>Accion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($horarios as $item)
                            <tr>
                                <td>{{ $item->titulo }}</td>
                                <td>
                                    <img src="{{ asset($item->url_imagen) }}" class="img-thumbnail text-center" width="130" alt="no encontrado">
                                </td>



                                <td> <a href="{{ route('horarios.edit', $item->id) }}" class="btn btn-info" data-toggle="modal"
                                    data-target="#ModalEdit-{{ $item->id }}"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#Modal_eliminar-{{ $item->id }}" data-id_eliminar="{{ $item->id }}"><i
                                            class="fa fa-trash" aria-hidden="true"></i></button></td>
                                @include('horarios.modal.modal_destroy')
                                @include('horarios.modal.modal_edit')
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
