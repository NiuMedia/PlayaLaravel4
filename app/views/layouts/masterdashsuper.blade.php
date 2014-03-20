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

    <body class="has-sideabar">
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
              <ul class="nav navbar-nav navbar-right">
                <!--<li>{{ HTML::link('app/users/create', 'Register new user',array('class'=>'navbtn')) }}</li>
                <li>{{ HTML::link('app/locations', 'Locations',array('class'=>'navbtn')) }}</li>
                <li>{{ HTML::link('app/types', 'Types',array('class'=>'navbtn')) }}</li>
                <li>{{ HTML::link('app/services', 'Services',array('class'=>'navbtn')) }}</li>-->
                <li>{{ HTML::link('app/admin/account'. Auth::user()->id, 'Account',array('class'=>'logout')) }}</li>
                <li>{{ HTML::link('users/logout', 'Logout',array('class'=>'logout')) }}</li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!-- END Navbar -->

        <!-- LEFT SIDEBAR MENU -->
        <div id="sidebar">
            <ul>
                <li>{{ HTML::link('app/admin', 'Dashboard',array('class'=>'sidebarBtn', 'id'=>'dashboard')) }}</li>
                <li>{{ HTML::link('app/users', 'Administrator',array('class'=>'sidebarBtn','id'=>'admin')) }}</li>
                <li>{{ HTML::link('app/users', 'Beaches',array('class'=>'sidebarBtn','id'=>'beach')) }}</li>
                <li>{{ HTML::link('app/users', 'Doctors',array('class'=>'sidebarBtn','id'=>'doc')) }}</li>
                <li>{{ HTML::link('app/users', 'Events',array('class'=>'sidebarBtn','id'=>'event')) }}</li>
                <li>{{ HTML::link('app/users', 'Hotels',array('class'=>'sidebarBtn','id'=>'hotel')) }}</li>
                <li>{{ HTML::link('app/users', 'Nightlife',array('class'=>'sidebarBtn','id'=>'night')) }}</li>
                <li>{{ HTML::link('app/users', 'Restaurant',array('class'=>'sidebarBtn','id'=>'restaurant')) }}</li>
                <li>{{ HTML::link('app/users', 'Shopping',array('class'=>'sidebarBtn','id'=>'shop')) }}</li>
                <li>{{ HTML::link('app/users', 'Tours',array('class'=>'sidebarBtn','id'=>'tour')) }}</li>
                <li>{{ HTML::link('app/users', 'Transportation',array('class'=>'sidebarBtn','id'=>'transport')) }}</li>
                <li>{{ HTML::link('app/users/create', '+ New User',array('class'=>'sidebarBtn')) }}</li>
                <li>{{ HTML::link('app/locations', 'Locations',array('class'=>'sidebarBtn')) }}</li>
                <li>{{ HTML::link('app/types', 'Types',array('class'=>'sidebarBtn')) }}</li>
                <li>{{ HTML::link('app/services', 'Services',array('class'=>'sidebarBtn')) }}</li>
            </ul>
        </div>
        <!-- END LEFT SIDEBAR MENU --> 

        <!-- Container -->
        <div class="container page-content container-with-sidebar">

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
                $('#sidebar').css('height', windowHeight);
            };
            $(document).ready(imageFit);
            $(window).resize(imageFit);
        </script>
    </body>
</html>