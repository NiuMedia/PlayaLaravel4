@extends('layouts.masterview')

@section('title')
@parent
:: Edit service
@stop

@section('content')

<h1>Edit {{ $service->name }}</h1>
	{{ HTML::ul($errors->all()) }}
	{{ Form::model($service, array('route' => array('app.services.update', $service->id), 'method' => 'PUT')) }}

		<div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('category', 'Category') }}
            {{ Form::select('category', array('0' => 'Select a category', 'hotel' => 'Hotel', 'restaurant' => 'Restaurant', 'nightlife' => 'Nightlife', 'shopping' => 'Shopping', 'tour' => 'Tour', 'beach' => 'Beach', 'event' => 'Event', 'transportation' => 'Transportation', 'doctor' => 'Doctor'), null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('facilityType', 'Type of facility') }}
            {{ Form::select('facilityType', array('0' => 'Select a facility type', '1' => 'Hotel Facilities Dining and Entertainment Facilities', '2' => 'Leisure and  recreational facilities', '3' => 'Business Facilities', '4' => 'Family Facilities', '5' => 'Handicapped / Disabled Facilities', '6' => 'General Facilities'), null, array('class' => 'form-control')) }}
        </div>


    {{ Form::submit('Edit service', array('class'=>'btn btn-large btn-primary btn-block'))}}
  {{ Form::close() }}


@stop