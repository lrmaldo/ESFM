<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Eventos- ESFM" />
    <meta name="author" content="Ing. Leonardo Maldonado López" />
    <link rel="icon" type="image/x-icon" href="img/logo_icon.ico" />
    <title>ESFM </title>


    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

</head>

<body id="page-top">


    <!-- Navigation-->
    @include('nav')
    <!-- Masthead-->

   {{--  <section class="page-section" id="publicaciones">
        <div class="col-md-8" style="float:none;margin:auto;">
            <div class="text-center">
                <!-- Project One -->
                @foreach ($eventos as $item)
                <div class="row">
                    <div class="col-md-7">
                    <a href="/evento/{{$item->id}}">
                            <img class="img-responsive " width="400" src="{{asset($item->foto_portada)}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                    <h3>{{$item->titulo}}</h3>
                    <p></p>
                        <p>{!!substr($item->descripcion,0,50) !!}...</p>
                    <a class="btn btn-primary" href="/evento/{{$item->id}}">Ver más
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                <!-- /.row -->

                <hr>
                    
                @endforeach
                


            </div>

        </div>
    </section> --}}

    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>fff</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="{{url('/')}}">Inicio</a>
      </li>
    <li class="breadcrumb-item active">{{$evento->titulo}}</li>
    </ol>
    <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="{{asset($evento->foto_portada)}}" alt="">
        </div>
  
        <div class="col-md-4">
          <h3 class="my-3">{{$evento->titulo}}</h3>
          <p>{!!$evento->descripcion!!}</p>
          
        </div>
  
      </div>
    
  </div>



    <!-- Footer-->
    @include('footer')

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
