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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              {{ HTML::image('img/playa.png', $alt = null, $attributes = array('class'=>'navbar-brand','width'=>'80px') ) }}
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>{{ HTML::link('app/users', 'Dashboard',array('class'=>'navbtn')) }}</li>
                </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>{{ HTML::link('app/users', 'Dashboard',array('class'=>'navbtn')) }}</li>
                <li>{{ HTML::link('app/users/create', 'Register new user',array('class'=>'navbtn')) }}</li>
                <li>{{ HTML::link('app/locations', 'Locations',array('class'=>'navbtn')) }}</li>
                <li>{{ HTML::link('app/types', 'Types',array('class'=>'navbtn')) }}</li>
                <li>{{ HTML::link('app/services', 'Services',array('class'=>'navbtn')) }}</li>
                <li>{{ HTML::link('users/logout', 'Logout',array('class'=>'logout')) }}</li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!-- END Navbar -->

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
        jQuery.fn.refresh = function() {
            var s = skrollr.get();
            if(s) {
                s.refresh(this);
            }
            return this;
        };
        var imageFit = function() {
            windowHeight = $(window).height();
            $('#img-back').css('height', windowHeight).refresh();
        };
        $(document).ready(imageFit);
        $(window).resize(imageFit);
    </script>
    </body>
</html>