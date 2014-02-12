@extends('layouts.masterview')

@section('title')
@parent
:: Edit location
@stop

@section('content')

<h1>Edit {{ $location->name }}</h1>
	{{ HTML::ul($errors->all()) }}
	{{ Form::model($location, array('route' => array('app.locations.update', $location->id), 'method' => 'PUT')) }}

		<div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>


    {{ Form::submit('Edit location', array('class'=>'btn btn-large btn-primary btn-block'))}}
  {{ Form::close() }}


@stop