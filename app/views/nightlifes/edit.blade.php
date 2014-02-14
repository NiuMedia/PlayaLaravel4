@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Edit
@stop

@section('content')
	
	<h1>Edit</h1>
	{{ HTML::ul($errors->all()) }}
	{{ Form::model($nightlife, array('route' => array('app.nightlifes.update', $nightlife->id), 'method' => 'PUT')) }}
		<div class="form-group">
	        {{ Form::label('name', 'Beach Name') }}
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

	{{ Form::submit('Edit', array('class'=>'btn btn-large btn-primary btn-block'))}}
  {{ Form::close() }}
@stop