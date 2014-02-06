@extends('layouts.masterlog')

@section('title')
@parent
:: Login
@stop

@section('content')

	<div class="jumbotron" align="center">
		{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
   			<h2 align="center">Login</h2>
   			<div class="form-group">
            	{{Form::label('email', 'Email', array('class' => 'col-sm-2 control-label'))}}
            	<div class="col-sm-10">
            		{{ Form::text('email', null, array('class' => 'form-control', 'style' => 'width: 100%;')) }}
            	</div>
            </div><br/>

            <div class="form-group">
            	{{Form::label('password', 'Password', array('class' => 'col-sm-2 control-label'))}}
            	<div class="col-sm-10">
            		{{ Form::password('password', array('class' => 'form-control', 'style' => 'width: 100%;')) }}
            	</div>
            </div>

            <div class="form-group" align="center">
            	<div class="col-sm-offset-2" >
 	   				{{ Form::submit('Login', array('class'=>'btn btn-large btn-primary', 'style' => 'width: 50%; align:center; height:50px; margin-top:30px'))}}
 	   			</div>
 	   		</div>
		{{ Form::close() }}
	</div>
@stop
