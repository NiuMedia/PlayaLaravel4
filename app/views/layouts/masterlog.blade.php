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
        {{ HTML::script('js/jquery-2.1.0.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>

    </head>

    <body>
        <div id="img-back"></div>
        <!-- Navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <div class="container">
                    {{ HTML::image('img/playa.png', $alt = null, $attributes = array('class'=>'navbar-brand','width'=>'80px') ) }}
                </div>
            </div>
        </div> 

        <!-- Container -->
        <div class="container page-content">

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
    <script type="text/javascript">
        var imageFit = function() {
            windowHeight = $(window).height();
            $('#img-back').css('height', windowHeight).refresh();
        };
        $(document).ready(imageFit);
        $(window).resize(imageFit);
    </script>
    </body>
</html>