@extends('layouts.masterview')

@section('title')
@parent
:: Edit type
@stop

@section('content')

<h1>Edit {{ $type->name }}</h1>
	{{ HTML::ul($errors->all()) }}
	{{ Form::model($type, array('route' => array('app.types.update', $type->id), 'method' => 'PUT')) }}

		<div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('category', 'Category') }}
            {{ Form::select('category', array('0' => 'Select a type', 'admin' => 'Administrador', 'hotel' => 'Hotel', 'restaurant' => 'Restaurant', 'nightlife' => 'Nightlife', 'shopping' => 'Shopping', 'tour' => 'Tour', 'beach' => 'Beach', 'event' => 'Event', 'transportation' => 'Transportation', 'doctor' => 'Doctor'), null, array('class' => 'form-control')) }}
        </div>


    {{ Form::submit('Edit type', array('class'=>'btn btn-large btn-primary btn-block'))}}
  {{ Form::close() }}


@stop