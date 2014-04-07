@extends('layouts.masterdashadmin')

@section('title')
@parent
:: Edit location
@stop

@section('content')

	{{ HTML::ul($errors->all()) }}
	{{ Form::model($location, array('route' => array('app.locations.update', $location->id), 'method' => 'PUT', 'class'=>'form-horizontal')) }}
    <div class="row title-header">
        <div class="col-md-9">
            <h2 class="form-signup-heading">Edit {{ $location->name }}</h2>
        </div>
    </div>
	

	<div class="col-md-6 row-content">
        <div class="row">
            <div class="form-group col-md-12">
            	{{ Form::label('name', 'Name', array('class'=>'col-sm-3 control-label')) }}
	            <div class="col-sm-9">
	            	{{ Form::text('name', null, array('class' => 'form-control')) }}
	        	</div>
	        </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            	{{ Form::submit('Edit', array('class'=>'btn btn-large btn-primary btn-block','id'=>'btn-register'))}}
        	</div>
            <div class="col-md-4"></div>
        </div>
    </div>


  {{ Form::close() }}


@stop