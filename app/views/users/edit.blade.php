@extends('layouts.masterview')

@section('title')
@parent
:: Edit
@stop

@section('content')
<div class="row title-header">
        <div class="col-md-9">
            <h1>Edit {{ $user->firstname }} {{$user->lastname}}</h1>
        </div>
    </div>

{{ HTML::ul($errors->all()) }}
{{ Form::model($user, array('route' => array('app.users.update', $user->id), 'method' => 'PUT', 'class'=>'form-horizontal')) }}

	<div class="row row-content">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('firstname', 'First Name', array('class'=>'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                    {{ Form::text('firstname', null, array('class' => 'form-control')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('lastname', 'Last Name', array('class'=>'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                    {{ Form::text('lastname', null, array('class' => 'form-control')) }}
                </div>
             </div>
            <div class="form-group">
                {{ Form::label('email', 'Email', array('class'=>'col-sm-3 control-label')) }}
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
                {{ Form::label('username', 'Username', array('class'=>'col-sm-3 control-label')) }}
                <div class="col-sm-9">                    
                    {{ Form::text('username', null, array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('location', 'Location', array('class'=>'col-sm-3 control-label') ) }}
                <div class="col-sm-9">
                    {{ Form::select('idlocation', $location_options , null, array('class' => 'form-control select-own')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('status', 'Status', array('class'=>'col-sm-3 control-label')) }}
                <div class="col-sm-9">                
                    {{ Form::select('status', array('0' => 'Select a status', 'active' => 'Active', 'inactive' => 'Inactive'), null, array('class' => 'form-control')) }}
                </div>
             </div>
        </div>
        <div class="col-md-3">
            {{ Form::submit('Submit', array('class'=>'btn btn-large btn-primary btn-block','id'=>'btn-register'))}}
        </div>
    </div>
{{ Form::close() }}


@stop