<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Escuela Secundaria Francisco de Montejo" />
        <meta name="author" content="Ing. Leonardo Maldonado López" />
        <title>ESFM</title>
        <link rel="icon" type="image/x-icon" href="img/logo_icon.ico" />

        <!-- Fonts -->
       <!--  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Styles -->
      
    </head>
    <body id="page-top">


     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">ESFM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link js-scroll-trigger" href="#services">Acerca <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/conoce">Conoce tu escuela</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Modelo Educativo
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/modelo#curriculum">Currículum </a>
                        <a class="dropdown-item" href="/modelo#horarios">Horarios</a>
                       
                      </div>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="/galeria">Galeria</a>
                    </li>
                  
                    
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team">Equipo</a>
                    </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Noticias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/publicaciones">Publicaciones </a>
                      <a class="dropdown-item" href="/eventos">Eventos</a>
                     
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                </ul>
                 
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%,rgba(116, 4, 4, 0.5) 100%),url('{{asset(App\portada::find(1)->url)}}')">
            <div class="container">
                <div class="masthead-subheading">Bienvenido</div>
                <div class="masthead-heading text-uppercase" style="font-size:50px">Escuela Secundaria Francisco de Montejo</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Ver más</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Quienes somos</h2>
                    <h3 class="section-subheading text-muted">{{$configuracion->quienes}}.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                       {{--  <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span> --}}
                        <h4 class="my-3">Misión</h4>
                        <p class="text-muted">{{$configuracion->mision}}.</p>
                    </div>
                   
                    <div class="col-md-6">
                      {{--   <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span> --}}
                        <h4 class="my-3">Visión</h4>
                        <p class="text-muted">{{$configuracion->vision}}.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Equipo</h2>
                    <h3 class="section-subheading text-muted">Nuestro personal Docente</h3>
                </div>
                {{-- director --}}
                        <div class="text-centet">
                            @foreach ($directores as $item)
                            <div class="col-lg-12">
                                <div class="team-member">
                                <a href="perfil/{{$item->id}}">
                                    <img class="mx-auto rounded-circle" src="{{$item->url_imagen!=null ?asset($item->url_imagen): asset('img/logo.jpg')}}" alt="" />
                                </a>
                                <a href="perfil/{{$item->id}}">
                                    <h4>{{$item->name}}</h4>
        
                                </a>
                                
                                <p class="text-muted">{{$item->cargo}}</p>
                                    {{-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a> --}}
                                    @if ($item->facebook)
                                   <a class="btn btn-dark btn-social mx-2" href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                        
                                    @endif
                                    @if ($item->telefono)
                                    <a class="btn btn-dark btn-social mx-2" href="tel:{{$item->telefono}}"><i class="fa fa-phone"></i></a>
                                        
                                    @endif
                                    {{-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> --}}
                                </div>
                            </div>
                                
                            @endforeach
                        </div>

                        {{-- docentes --}}
                <div class="row">
                   {{--  @php
                        echo $docentes;
                    @endphp --}}
                    @foreach ($docentes as $item)
                    <div class="col-lg-4">
                        <div class="team-member">
                        <a href="perfil/{{$item->id}}">
                            <img class="mx-auto rounded-circle" src="{{$item->url_imagen!=null ?asset($item->url_imagen): asset('img/logo.jpg')}}" alt="" />
                        </a>
                        <a href="perfil/{{$item->id}}">
                            <h4>{{$item->name}}</h4>
                        </a>
                        
                        <p class="text-muted">{{$item->cargo}}</p>
                            {{-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a> --}}
                            @if ($item->facebook)
                           <a class="btn btn-dark btn-social mx-2" href="{{$item->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                
                            @endif
                            @if ($item->telefono)
                            <a class="btn btn-dark btn-social mx-2" href="tel:{{$item->telefono}}"><i class="fa fa-phone"></i></a> 
                            @endif
                            @if ($item->email)
                            <a class="btn btn-dark btn-social mx-2" href="mailto:{{$item->email}}"><i class="fa fa-envelope"></i></a> 
                            @endif
                            {{-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> --}}
                        </div>
                    </div>
                        
                    @endforeach
                   {{--  <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div> --}}
                   {{--  <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div> --}}
            </div>
        </section>
        
        <!-- Contact-->
        <section class="page-section" style="
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%,rgba(116, 4, 4, 0.5) 100%),url('{{asset(App\portada::find(1)->url)}}')" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contacto</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Se requiere tu nombre." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Se requiere un correo" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Teléfono *" required="required" data-validation-required-message="Se requiere un teléfono ." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Escribe tu mensaje *" required="required" data-validation-required-message="Se requiere un mensaje."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar mensaje</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
      @include('footer')
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        

        

        <!--   <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
    </body>
    </html>

    {{--   <!-- Portfolio Grid-->
      <section class="page-section bg-light" id="portfolio">
          <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase">Portfolio</h2>
                  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-sm-6 mb-4">
                      <div class="portfolio-item">
                          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                              <div class="portfolio-hover">
                                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                              </div>
                              <img class="img-fluid" src="assets/img/portfolio/01-thumbnail.jpg" alt="" />
                          </a>
                          <div class="portfolio-caption">
                              <div class="portfolio-caption-heading">Threads</div>
                              <div class="portfolio-caption-subheading text-muted">Illustration</div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-4">
                      <div class="portfolio-item">
                          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                              <div class="portfolio-hover">
                                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                              </div>
                              <img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />
                          </a>
                          <div class="portfolio-caption">
                              <div class="portfolio-caption-heading">Explore</div>
                              <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-4">
                      <div class="portfolio-item">
                          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                              <div class="portfolio-hover">
                                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                              </div>
                              <img class="img-fluid" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />
                          </a>
                          <div class="portfolio-caption">
                              <div class="portfolio-caption-heading">Finish</div>
                              <div class="portfolio-caption-subheading text-muted">Identity</div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                      <div class="portfolio-item">
                          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                              <div class="portfolio-hover">
                                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                              </div>
                              <img class="img-fluid" src="assets/img/portfolio/04-thumbnail.jpg" alt="" />
                          </a>
                          <div class="portfolio-caption">
                              <div class="portfolio-caption-heading">Lines</div>
                              <div class="portfolio-caption-subheading text-muted">Branding</div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                      <div class="portfolio-item">
                          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                              <div class="portfolio-hover">
                                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                              </div>
                              <img class="img-fluid" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />
                          </a>
                          <div class="portfolio-caption">
                              <div class="portfolio-caption-heading">Southwest</div>
                              <div class="portfolio-caption-subheading text-muted">Website Design</div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <div class="portfolio-item">
                          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                              <div class="portfolio-hover">
                                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                              </div>
                              <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
                          </a>
                          <div class="portfolio-caption">
                              <div class="portfolio-caption-heading">Window</div>
                              <div class="portfolio-caption-subheading text-muted">Photography</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- About-->
      <section class="page-section" id="about">
          <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase">About</h2>
                  <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
              </div>
              <ul class="timeline">
                  <li>
                      <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                      <div class="timeline-panel">
                          <div class="timeline-heading">
                              <h4>2009-2011</h4>
                              <h4 class="subheading">Our Humble Beginnings</h4>
                          </div>
                          <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                      </div>
                  </li>
                  <li class="timeline-inverted">
                      <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                      <div class="timeline-panel">
                          <div class="timeline-heading">
                              <h4>March 2011</h4>
                              <h4 class="subheading">An Agency is Born</h4>
                          </div>
                          <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                      </div>
                  </li>
                  <li>
                      <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                      <div class="timeline-panel">
                          <div class="timeline-heading">
                              <h4>December 2012</h4>
                              <h4 class="subheading">Transition to Full Service</h4>
                          </div>
                          <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                      </div>
                  </li>
                  <li class="timeline-inverted">
                      <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                      <div class="timeline-panel">
                          <div class="timeline-heading">
                              <h4>July 2014</h4>
                              <h4 class="subheading">Phase Two Expansion</h4>
                          </div>
                          <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                      </div>
                  </li>
                  <li class="timeline-inverted">
                      <div class="timeline-image">
                          <h4>
                              Be Part
                              <br />
                              Of Our
                              <br />
                              Story!
                          </h4>
                      </div>
                  </li>
              </ul>
          </div>
      </section> --}}