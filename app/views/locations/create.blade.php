@extends('layouts.masterview')

   @section('title')
      @parent
         :: Create Location
   @stop
   
   @section('content')

   {{ Form::open(array('url'=>'app/locations', 'class'=>'form-signup')) }}
   <h2 class="form-signup-heading">New location</h2>
         <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>

         <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
         </div>

         {{ Form::submit('Add location', array('class'=>'btn btn-large btn-primary btn-block'))}}
      {{ Form::close() }}

   @stop