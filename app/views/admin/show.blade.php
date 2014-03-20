@extends('layouts.masterdashsuper')

@section('title')
@parent
:: View
@stop

@section('content')
<div class="row title-header">
        <div class="col-md-9">
        	<h2>{{ $user->firstname }} {{$user->lastname}}</h2>
        </div>
    </div>
	<div class="col-md-6 row-content">
		<div class="row">
			<div class="col-md-3 text-right"><strong>Email:</strong></div>
			<div class="col-md-9">{{ $user->email }}</div>
		</div>
		<div class="row">
			<div class="col-md-3 text-right"><strong>Username:</strong></div>
			<div class="col-md-9">{{ $user->username }}</div>
		</div>
		<div class="row">
			<div class="col-md-3 text-right"><strong>Type:</strong> </div>
			<div class="col-md-9">{{ $user->rol }}</div>
		</div>
		<div class="row">
			<div class="col-md-3 text-right"><strong>Status:</strong></div>
			<div class="col-md-9">{{ $user->status }}</div>
		</div>
		<div class="row">
			<div class="col-md-3 text-right"><strong>Status:</strong></div>
			<div class="col-md-9">{{ $user->status }}</div>
		</div>
		<div class="row">
			<?php 
				if($user->idlocation != 0){
					$location = DB::table('locations')->where('id', $user->idlocation)->pluck('name'); 
				}
				else
					$location = '';
			?>
			<div class="col-md-3 text-right"><strong>Location:</strong></div>
			<div class="col-md-9">{{$location}}</div>
		</div>
	</div>

@stop