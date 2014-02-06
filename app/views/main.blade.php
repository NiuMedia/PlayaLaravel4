<!DOCTYPE html>
<html lang="en">
	<head>
    	<title>
          @section('title')
                Playa
          @show
      </title>
    	{{ HTML::style('css/bootstrap.css') }}
      {{ HTML::style('css/bootstrap-responsive.css') }}

      <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
      </style>
  	</head>
 
  	<body>
 		
  		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      		<div class="navbar-header">
         		<div class="container">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">PlayaApp</a>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            		<ul class="nav navbar-nav">  
               			@if(!Auth::check())
               				<li>{{ HTML::link('users/register', 'Register') }}</li>   
               				<li>{{ HTML::link('users/login', 'Login') }}</li>   
            			@else
               				<li>{{ HTML::link('users/logout', 'logout') }}</li>
            			@endif  
            		</ul>
              </div>  
         		</div>
      		</div>
   		</div>

   		<div class="container">
      		@if(Session::has('message'))
         		<div class="alert alert-success">
              {{ Session::get('message') }}
            </div>
      		@endif
      		{{ $content }}
    	</div> 

       <!-- seccion de script -->
        {{ HTML::script('js/jquery.v1.8.3.min.js') }}
        {{ HTML::script('js/bootstrap/bootstrap.min.js') }}
  	</body>
</html>