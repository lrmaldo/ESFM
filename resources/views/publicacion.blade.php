<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{$publicacion->titulo}}" />
        <meta name="author" content="Ing. Leonardo Maldonado López" />
    <title>ESFM {{$publicacion->titulo}}</title>
    <link rel="icon" type="image/x-icon" href="img/logo_icon.ico" />

      
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
      
    </head>
    <body id="page-top">


     <!-- Navigation-->
    @include('nav')
        <!-- Masthead-->
        
        <section class="page-section" id="publicaciones">
            <div class="col-md-8" style="float:none;margin:auto;">
                <div class="text-center">
                  
                    <h1 class="mt-4 mb-3">{{$publicacion->titulo}}
                        <small>por 
                        <a href="../perfil/{{$publicacion->usuario->id}}">{{$publicacion->usuario->name}}</a>
                        </small>
                      </h1>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="/publicaciones">Publicaciones</a>
                        </li>
                        <li class="breadcrumb-item active">{{$publicacion->titulo}}</li>
                      </ol>
            
                      <div class="col-lg-8" style="float:none;margin:auto;">
            
                        <!-- Preview Image -->
                        <img class="mx-auto rounded " width="400" src="{{asset($publicacion->foto_portada)}}" alt="">
                
                        <hr>
                
                        <!-- Date/Time -->
                        <p>Publicado el {{date_format($publicacion->created_at,'d/m/Y h:i:s A')}}</p> 
                
                        <hr>
                        <p>{!!$publicacion->descripcion!!}</p>
            
                      </div>
          
                </div>
              
            </div>
        </section>
      
       
       
        <!-- Footer-->
        @include('footer')
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
      
        
        <!-- Core theme JS-->
        {{-- <script src="js/scripts.js"></script> --}}





    
    </body>
</html>
