@extends('layouts.masterdashadmin')

@section('title')
@parent
:: Dashboard
@stop

@section('content')

	<h1>Dashboard</h1>
	 
	<p>Welcome to your Dashboard Admin. You rock!</p>
	@foreach($users as $user)
		<p>{{$user->firstname}}</p>
	@endforeach
@stop