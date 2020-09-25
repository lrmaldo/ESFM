<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{$publicacion->titulo}}" />
        <meta name="author" content="Ing. Leonardo Maldonado López" />
    <title>ESFM {{$publicacion->titulo}}</title>

      
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
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/#page-top">ESFM</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#services">Acerca</a></li>
                            
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Modelo Educativo
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/modelo#curriculum">Currículum </a>
                                    <a class="dropdown-item" href="/modelo#horarios">Horarios</a>
                                 {{--  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a> --}}
                                </div>
                              </li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/conoce">Conoce tu escuela</a></li>
                      
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Equipo</a></li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Noticias
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Publicaciones</a>
                              <a class="dropdown-item" href="#">Eventos</a>
                              
                            </div>
                          </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <section class="page-section" id="publicaciones">
            <div class="col-md-8" style="float:none;margin:auto;">
                <div class="text-center">
                  
                    <h1 class="mt-4 mb-3">{{$publicacion->titulo}}
                        <small>por 
                        <a href="#">{{$publicacion->usuario->name}}</a>
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
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © ESFM 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        {{-- <script src="js/scripts.js"></script> --}}





    
    </body>
</html>
