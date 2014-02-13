@extends('layouts.masterview')

   @section('title')
      @parent
         :: Create type
   @stop
   
   @section('content')

   {{ Form::open(array('url'=>'app/types', 'class'=>'form-signup')) }}
   <h2 class="form-signup-heading">New type</h2>
         <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>

         <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
         </div>

         <div class="form-group">
            {{ Form::label('category', 'Category') }}
            {{ Form::select('category', array('0' => 'Select a type', 'admin' => 'Administrador', 'hotel' => 'Hotel', 'restaurant' => 'Restaurant', 'nightlife' => 'Nightlife', 'shopping' => 'Shopping', 'tour' => 'Tour', 'beach' => 'Beach', 'event' => 'Event', 'transportation' => 'Transportation', 'doctor' => 'Doctor'), null, array('class' => 'form-control')) }}
         </div>

         {{ Form::submit('Add type', array('class'=>'btn btn-large btn-primary btn-block'))}}
      {{ Form::close() }}

   @stop