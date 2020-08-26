@extends('layouts.app')

@section('content')
<h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabla Usuarios
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
                                            <td>{{$item->telefono}}</td>
                                            
                                                <td>docente</td>
                                                <td>  <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" data-whatever="{{ $item->id }}"
                                                    data-href="{{ route('user.update', $item->id) }}"><i class="fa fa-edit"
                                                        aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#Modal_eliminar" data-id_eliminar="{{ $item->id }}"
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
