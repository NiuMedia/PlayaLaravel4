@extends('layouts.masterview')

   @section('title')
      @parent
         :: Register
   @stop
   
   @section('content')

      {{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
         <h2 class="form-signup-heading">Register</h2>
         <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>

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
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', null, array('class' => 'form-control')) }}
         </div>
 
         <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirm password') }}
            {{ Form::password('password_confirmation', null, array('class' => 'form-control')) }}
         </div>
 
         <div class="form-group">
            {{ Form::label('rol', 'Type') }}
            {{ Form::select('rol', array('0' => 'Select a type', 'admin' => 'Administrador', 'hotel' => 'Hotel', 'restaurant' => 'Restaurant', 'nightlife' => 'Nightlife', 'shopping' => 'Shopping', 'tour' => 'Tour', 'beach' => 'Beach', 'event' => 'Event', 'transportation' => 'Transportation', 'doctor' => 'Doctor'), null, array('class' => 'form-control')) }}
         </div>
 
         <div class="form-group">
            {{ Form::label('status', 'Status') }}
            {{ Form::select('status', array('0' => 'Select a status', 'active' => 'Active', 'inactive' => 'Inactive'), null, array('class' => 'form-control')) }}
         </div>

         {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
      {{ Form::close() }}

   @stop