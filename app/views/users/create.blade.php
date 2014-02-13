@extends('layouts.masterview')

   @section('title')
      @parent
         :: Register
   @stop
   
   @section('content')

      {{ Form::open(array('url'=>'app/users', 'role'=>'form', 'class'=>'form-horizontal')) }}
         <h2 class="form-signup-heading">New User</h2>
         <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  {{ Form::label('firstname', 'First Name', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::text('firstname', null, array('class' => 'form-control')) }}
                  </div>
               </div>
       
               <div class="form-group">
                  {{ Form::label('lastname', 'Last Name', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::text('lastname', null, array('class' => 'form-control')) }}
                  </div>
               </div>
       
               <div class="form-group">
                  {{ Form::label('email', 'Email', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::email('email', null, array('class' => 'form-control')) }}
                  </div>
               </div>

               <div class="form-group">
                  {{ Form::label('phone', 'Phone', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::text('phone', null, array('class' => 'form-control')) }}
                  </div>
               </div>
       
               <div class="form-group">
                  {{ Form::label('username', 'Username', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::text('username', null, array('class' => 'form-control')) }}
                  </div>
               </div>
       
               <div class="form-group">
                  {{ Form::label('password', 'Password', array('class'=>'col-sm-3 control-label')  ) }}
                  <div class="col-sm-9">
                     {{ Form::password('password', null, array('class' => 'form-control')) }}
                  </div>
               </div>
       
               <div class="form-group">
                  {{ Form::label('password_confirmation', 'Confirm password', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::password('password_confirmation', null,  array('class' => 'form-control')) }}
                  </div>
               </div>
       
               <div class="form-group">
                  {{ Form::label('rol', 'Category', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::select('rol', array('0' => 'Select a category', 'admin' => 'Administrador', 'hotel' => 'Hotel', 'restaurant' => 'Restaurant', 'nightlife' => 'Nightlife', 'shopping' => 'Shopping', 'tour' => 'Tour', 'beach' => 'Beach', 'event' => 'Event', 'transportation' => 'Transportation', 'doctor' => 'Doctor'), null, array('class' => 'form-control select-own')) }}
                  </div>
               </div>

               <?php $locations = DB::table('locations')->get();  ?>

               <div class="form-group">
                  {{ Form::label('location', 'Location', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::select('idlocation', $location_options , null, array('class' => 'form-control select-own')) }}
                  </div>
               </div>
       
               <div class="form-group">
                  {{ Form::label('status', 'Status', array('class'=>'col-sm-3 control-label') ) }}
                  <div class="col-sm-9">
                     {{ Form::select('status', array('0' => 'Select a status', 'active' => 'Active', 'inactive' => 'Inactive'), null, array('class' => 'form-control select-own')) }}
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block', 'id'=>'btn-register'))}}
            </div>
            
         </div>
      {{ Form::close() }}

   @stop