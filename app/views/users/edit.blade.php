@extends('layouts.masterview')

@section('title')
@parent
:: Edit
@stop

@section('content')

	<h1>Edit</h1>
	<div class="jumbotron text-center">
		<h2>{{ $user->firstname }} {{$user->lastname}}</h2>
		<p>
			<strong>Email:</strong> {{ $user->email }}<br>
			<strong>Username:</strong> {{ $user->username }}<br>
			<strong>Type:</strong> {{ $user->rol }}<br>
			<strong>Status:</strong> {{ $user->status }}
		</p>
	</div>

@stop