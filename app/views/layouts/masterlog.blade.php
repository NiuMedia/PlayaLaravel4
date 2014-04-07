<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
                Playa
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- seccion de CSS -->
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        {{ HTML::style('css/main.css') }}

         <!-- seccion de script -->
        {{ HTML::script('js/jquery.v1.8.3.min.js') }}
        {{ HTML::script('js/bootstrap/bootstrap.min.js') }}
        <script src="http://use.edgefonts.net/source-sans-pro:n2,i2,n3,n4,i4,n6,n7,n9.js"></script>

        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <div class="container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Playa</a>

                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            
                        </ul> 
                    </div>
                </div>
            </div>
        </div> 

        <!-- Container -->
        <div class="container">

            <!-- Content -->
            @yield('content')
            <!-- End Content -->

        </div>

        <!-- End Container -->

        <footer class="site-footer">
            <div class="footer-in" id="footer-left">
                Sitio implementado por Niumedia
            </div>
            <div class="footer-in" id="footer-right">
                Playa All Rights Reserved © 2014
            </div>
        </footer>

    </body>
</html>