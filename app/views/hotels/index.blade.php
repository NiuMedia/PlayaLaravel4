@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Dashboard
@stop

@section('content')

	<h1>Hotel Dashboard</h1>

	<p>Welcome {{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>

	<?php
		$id = Hotel::where('id_user', '=', Auth::user()->id)->pluck('id');
		$name = Hotel::where('id_user', '=', Auth::user()->id)->pluck('name'); 
		$address = Hotel::where('id_user', '=', Auth::user()->id)->pluck('street');
		$overview = Hotel::where('id_user', '=', Auth::user()->id)->pluck('overview');
	?>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Attribute</th>
				<th>Content</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Contact Person</td>
				<td>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</td>
			</tr>
			<tr>
				<td>Email Contact Person</td>
				<td>{{Auth::user()->email}}</td>
			</tr>
			<tr>
				<td>Beach name</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>{{$address}}</td>
			</tr>
			<tr>
				<td>Overview</td>
				<td>{{$overview}}</td>
			</tr>
		</tbody>
	</table>

	<a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/hotels/' . $id . '/edit' ) }}">Edit my info</a>	


@stop