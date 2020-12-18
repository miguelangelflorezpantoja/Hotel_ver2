<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel la Rivera</title>

        <!-- Fonts -->
        
        
        
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/mdb.min.css') }}" rel="stylesheet">

        
    </head>
    <body>
            @include('partials.navegacion')

            <div>
                @yield('content')
            </div>
 
            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/popper.min.js') }}"></script>
            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ url('/assets/bootstrap/js/mdb.min.js') }}"></script> 


            
    </body>

    <footer class="page-footer font-small black special-color-dark">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
             
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5>Contactanos</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Líneas de atención al cliente</a>
                        <br><a href="#!">+57321332222666</a>
                    </li>
                    <li>
                        <a href="#!"></a>
                    </li>

                </ul>

            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> Udenar.edu.co</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</html>