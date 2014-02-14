@extends('layouts.masterview')

   @section('title')
      @parent
         :: Create Location
   @stop
   
   @section('content')

   {{ Form::open(array('url'=>'app/locations', 'class'=>'form-horizontal')) }}
   <h2 class="form-signup-heading">New location</h2>
         <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
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
               {{ Form::submit('Add location', array('class'=>'btn btn-large btn-primary btn-block', 'id'=>'btn-register'))}}
            </div>
            <div class="col-md-4"></div>
         </div>
      </div>
      {{ Form::close() }}

   @stop