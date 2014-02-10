@extends('layouts.masterview')

@section('title')
@parent
:: Edit
@stop

@section('content')

	<h1>Edit {{ $user->firstname }} {{$user->lastname}}</h1>
	{{ HTML::ul($errors->all()) }}
	{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

	 <div class="form-group">
        {{ Form::label('firstname', 'First Name') }}
        {{ Form::text('firstname', null, array('class' => 'form-control')) }}
      </div>

     <div class="form-group">
        {{ Form::label('lastname', 'Last Name') }}
        {{ Form::text('lastname', null, array('class' => 'form-control')) }}
     </div>

     <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
     </div>

     <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, array('class' => 'form-control')) }}
     </div>

     <div class="form-group">
        {{ Form::label('rol', 'Type') }}
        {{ Form::select('rol', array('0' => 'Select a type', 'admin' => 'Administrador', 'hotel' => 'Hotel', 'restaurant' => 'Restaurant', 'nightlife' => 'Nightlife', 'shopping' => 'Shopping', 'tour' => 'Tour', 'beach' => 'Beach', 'event' => 'Event', 'transportation' => 'Transportation', 'doctor' => 'Doctor'), null, array('class' => 'form-control')) }}
     </div>

     <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::select('status', array('0' => 'Select a status', 'active' => 'Active', 'inactive' => 'Inactive'), null, array('class' => 'form-control')) }}
     </div>

     {{ Form::submit('Edit the user', array('class'=>'btn btn-large btn-primary btn-block'))}}
  {{ Form::close() }}


@stop