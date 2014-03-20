@extends('layouts.masterdashsuper')

@section('title')
@parent
:: Account
@stop

@section('content')

<div class="row title-header">
        <div class="col-md-9">
            <h1>Administrator {{ Auth::user()->firstname }} {{Auth::user()->lastname}}</h1>
            <td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/admin/' . Auth::user()->id . '/edit' ) }}">Edit</a></td>
        </div>
    </div>

{{ HTML::ul($errors->all()) }}

	<div class="row row-content">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('firstname', 'First Name', array('class'=>'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                    {{ Form::label('firstname', Auth::user()->firstname, array('class' => 'form-control')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('lastname', 'Last Name', array('class'=>'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                    {{ Form::label('lastname', Auth::user()->lastname, array('class' => 'form-control')) }}
                </div>
             </div>
            <div class="form-group">
                {{ Form::label('email', 'Email', array('class'=>'col-sm-3 control-label')) }}
                <div class="col-sm-9">
                    {{ Form::label('email', Auth::user()->email, array('class' => 'form-control')) }}
                </div>
             </div>
            <div class="form-group">
                {{ Form::label('phone', 'Phone', array('class'=>'col-sm-3 control-label') ) }}
                <div class="col-sm-9">
                    {{ Form::label('phone', Auth::user()->phone, array('class' => 'form-control')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('location', 'Location', array('class'=>'col-sm-3 control-label') ) }}
                <div class="col-sm-9">
                    <?php 
                    $idlocation = Auth::user()->idlocation;
                        if($idlocation != 0){
                            $location = DB::table('locations')->where('id', Auth::user()->idlocation)->pluck('name'); 
                        }
                        else
                            $location = '';
                    ?>
                    
                    {{ Form::label('idlocation', $location, array('class' => 'form-control')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('status', 'Status', array('class'=>'col-sm-3 control-label')) }}
                <div class="col-sm-9">                
                    {{ Form::label('status', Auth::user()->status, array('class' => 'form-control')) }}
                </div>
            </div>
        </div>
    </div>
{{ Form::close() }}
@stop