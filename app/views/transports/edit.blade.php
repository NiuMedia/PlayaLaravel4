@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Edit
@stop

@section('content')
	
	<h1>Edit</h1>
	{{ HTML::ul($errors->all()) }}
	{{ Form::model($transport, array('route' => array('app.transports.update', $transport->id), 'method' => 'PUT')) }}
		<div class="form-group">
	        {{ Form::label('name', 'Transportation Name') }}
	        {{ Form::text('name', null, array('class' => 'form-control')) }}
	    </div>

        <div class="form-group">
            {{ Form::label('type', 'Category', array('class'=>'col-sm-3 control-label') ) }}
            <div class="col-sm-9">
               {{ Form::select('idtype', $type_options , null, array('class' => 'form-control select-own')) }}
            </div>
        </div>

     	<div class="form-group">
        	{{ Form::label('address', 'Address') }}
        	{{ Form::text('address', null, array('class' => 'form-control')) }}
     	</div>

        <div class="form-group">
            {{ Form::label('lat', 'Latitud') }}
            {{ Form::text('lat', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('long', 'Longitud') }}
            {{ Form::text('long', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('cellphone', 'Cellphone') }}
            {{ Form::text('cellphone', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', null, array('class' => 'form-control')) }}
        </div>

     	<div class="form-group">
        	{{ Form::label('overview', 'Overview') }}
        	{{ Form::text('overview', null, array('class' => 'form-control', 'rows' => '3')) }}
     	</div>

	{{ Form::submit('Edit', array('class'=>'btn btn-large btn-primary btn-block'))}}
  {{ Form::close() }}
@stop