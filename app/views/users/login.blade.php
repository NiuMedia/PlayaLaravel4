@extends('layouts.masterlog')

@section('title')
@parent
:: Login
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        {{ HTML::image('img/icon.png', $alt = null, $attributes = array('id'=>'img-login') ) }}
    </div>
    <div class="col-md-6">
        <div class="jumbotron" id="jumbo-login" align="center">
        {{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
            <h2 align="center">Login</h2>
            <div class="form-group row">
                <div class="col-sm-4">
                    {{Form::label('email', 'Email')}}
                </div>
                <div class="col-sm-8">
                    {{ Form::text('email', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4">
                    {{Form::label('password', 'Password')}}
                </div>
                <div class="col-sm-8">
                    {{ Form::password('password', array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group row" align="center">
                    {{ Form::submit('Login', array('class'=>'btn btn-lg btn-primary', 'id'=>'btn-login')) }}
            </div>
        {{ Form::close() }}
    </div>
    </div>
</div>

@stop