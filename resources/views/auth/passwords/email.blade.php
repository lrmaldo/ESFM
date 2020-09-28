<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Login -ESFM" />
        <meta name="author" content="Ing. Leonardo Maldonado" />
        <title>Reset Password - ESFM </title>
        <link href="{{asset('dash/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style=" background-size:cover; background-repeat:no-repeat; background-position:center;
    background-image: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%,rgba(116, 4, 4, 0.5) 100%),url('{{asset(App\portada::find(1)->url)}}')">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 text-white" style="background-color: rgba(0,0,0,0.6);">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Reset Password</h3></div>
                                    <div class="card-body">
                                        @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                        {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label class="small mb-1" for="inputEmailAddress">Correo</label>
                                                <input class="form-control py-4" id="email" type="email" name="email" value="{{ old('email') }}"  placeholder="Ingresa tu correo" required autofocus />
                                            
                                               @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                              
                                                <button type="submit" class="btn btn-primary">
                                                    Enviar Password Reset Link
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                       {{--  <div class="small"><a href="register.html">Need an account? Sign up!</a></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ESFM  <script> document.write(new Date().getFullYear())</script></div>
                            <div>
                                <a href="/politica">Políticas de privacidad</a>
                                &middot;
                                <a href="/terminos">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('dash/js/scripts.js')}}"></script>
    </body>
</html>

{{-- 

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}