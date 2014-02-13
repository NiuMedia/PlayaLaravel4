@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Edit
@stop

@section('content')
	
	<h1>Edit</h1>
	{{ HTML::ul($errors->all()) }}
	{{ Form::model($hotel, array('route' => array('app.hotels.update', $hotel->id), 'method' => 'PUT')) }}
		<div class="form-group">
	        {{ Form::label('name', 'Hotel Name') }}
	        {{ Form::text('name', null, array('class' => 'form-control')) }}
	    </div>

     	<div class="form-group">
        	{{ Form::label('address', 'Address') }}
        	{{ Form::text('address', null, array('class' => 'form-control')) }}
     	</div>

     	<div class="form-group">
        	{{ Form::label('overview', 'Overview') }}
        	{{ Form::text('overview', null, array('class' => 'form-control', 'rows' => '3')) }}
     	</div>

        <div class="form-group">
            {{ Form::label('type', 'Type') }}
            {{ Form::select('id_type', $type_options , null, array('class' => 'form-control select-own')) }}
        </div>

	{{ Form::submit('Edit', array('class'=>'btn btn-large btn-primary btn-block'))}}
  {{ Form::close() }}
@stop