<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Escuela Secundaria Francisco de Montejo" />
        <meta name="author" content="Ing. Leonardo Maldonado López" />
        <title>ESFM</title>

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
     
    </head>
    <body id="page-top">


    @include('nav')
        
        <section class="page-section" id="curriculum">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Curriculum</h2>
                    {!!$modelo->texto!!}
                </div>
              
            </div>
        </section>
        <section class="page-section" id="horarios">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Horarios</h2>
                    {{-- <h3 class="section-subheading text-muted">text.</h3> --}}
                    @foreach ($horarios as $item)
                                     <h3 class="text-uppercase">{{$item->titulo}}</h3>
                                     <p class="item-intro text-muted"></p>
                                     <img class="img-fluid d-block mx-auto" width="700" src="{{$item->url_imagen}}" alt="" />
                                     <br>

                    @endforeach
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
