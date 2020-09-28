<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright ©  ESFM <script> document.write( new Date().getFullYear())</script></div>
            <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="tel:{{App\configuracion::find(1)->telefono}}"><i class="fa fa-phone"></i></a>
                <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.facebook.com/ESFMoficial"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="mailto:{{App\configuracion::find(1)->correo}}"><i class="fa fa-envelope"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Política de privacidad</a>
                <a href="#!">Terminos y condiciones</a>
            </div>
        </div>
        <br>
        <div class="row align-items-center">
           
            
                
                <div class="col-lg-12 text-lg-center">Desarrollado por  <a  target="_blank" href="{{url('https://lrmaldo.github.io')}}">LRMALDO</a></div>
               
            
           
        </div>
    </div>
</footer>