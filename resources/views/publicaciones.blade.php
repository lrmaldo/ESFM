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
        <!-- Styles -->
     
    </head>
    <body id="page-top">


     <!-- Navigation-->
     @include('nav')
        <!-- Masthead-->
        
        <section class="page-section" id="publicaciones">
            <div class="col-md-8" style="float:none;margin:auto;">
                <div class="text-center">
                   @foreach ($publicaciones as $item)
                   <div class="card mb-4">
                    <img class="img-fluid " src="{{$item->foto_portada}}"  height="600" alt="Card image cap">
                    <div class="card-body">
                    <h2 class="card-title">{{$item->titulo}}</h2>
                    <p class="card-text">{!!substr($item->descripcion,0,50) !!}...</p>
                    <a href="publicacion/{{$item->id}}" class="btn btn-primary">Leer más &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                      {{date_format($item->created_at,'d/m/Y h:i:s A')}} por
                      <a href="perfil/{{$item->usuario->id}}">{{$item->usuario->name}}</a>
                    </div>
                  </div>
                   @endforeach
                     <!-- Blog Post -->
       
                     {!! $publicaciones->links('vendor.pagination.bootstrap-4'); !!}
                </div>
              
            </div>
        </section>
      
       
       
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
