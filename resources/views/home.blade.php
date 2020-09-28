@extends('layouts.app')

@section('content')
<h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Foto portada</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{route('portada')}}">Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Configuración</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Portada</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/portada">Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Horarios</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/horarios">Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabla Usuarios
                                <a  href="{{route('user.create')}}" class="btn btn-primary  text-white"> <i
                                    class="fa fa-user text-white"></i> Crear usuario</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Telefono</th>
                                              
                                                <th>Puesto</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Telefono</th>
                                              
                                                <th>Puesto</th>
                                                <th>Accion</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           @foreach ($user as $item)
                                            <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td style="text-align: center">@if ($item->activar == 1)
                                                <span class="badge badge-pill badge-success">Activo</span>
                                              @else
                                              <span class="badge badge-pill badge-danger">No activo</span>
                                              @endif</td>
                                            
                                            <td>{{$item->cargo}}</td>
                                                <td>  <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-edit"
                                                        aria-hidden="true"></i></a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#Modal_eliminar-{{$item->id}}" data-id_eliminar="{{ $item->id }}"
                                                    data-href="{{ route('user.destroy', $item->id) }}"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button></td>
                                                        @include('user.modal.modal_destroy')
                                            </tr>
                                           @endforeach 
                                        </tbody>
                                    </table>
                                        </div>
                            </div>
                        </div>
                        
@endsection
