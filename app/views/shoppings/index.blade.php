@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Dashboard
@stop

@section('content')

	<h1>Shopping Dashboard</h1>

	<p>Welcome {{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>

	<?php
		$id = Shopping::where('id_user', '=', Auth::user()->id)->pluck('id');
		$id_type = Shopping::where('id_user', '=', Auth::user()->id)->pluck('id_type');
		$name = Shopping::where('id_user', '=', Auth::user()->id)->pluck('name'); 
		$address = Shopping::where('id_user', '=', Auth::user()->id)->pluck('address');
		$lat = Shopping::where('id_user', '=', Auth::user()->id)->pluck('lat');
		$long = Shopping::where('id_user', '=', Auth::user()->id)->pluck('long');
		$phone = Shopping::where('id_user', '=', Auth::user()->id)->pluck('phone');
		$overview = Shopping::where('id_user', '=', Auth::user()->id)->pluck('overview');
		$photo1 = Shopping::where('id_user', '=', Auth::user()->id)->pluck('photo1');
		$photo2 = Shopping::where('id_user', '=', Auth::user()->id)->pluck('photo2');
		$photo3 = Shopping::where('id_user', '=', Auth::user()->id)->pluck('photo3');
		$photo4 = Shopping::where('id_user', '=', Auth::user()->id)->pluck('photo4');
		$photo5 = Shopping::where('id_user', '=', Auth::user()->id)->pluck('photo5');
		$photo6 = Shopping::where('id_user', '=', Auth::user()->id)->pluck('photo6');
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
				<td>Category</td>
				<td>{{$id_type}}</td>
			</tr>
			<tr>
				<td>Shopping name</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>{{$address}}</td>
			</tr>
			<tr>
				<td>Latitude</td>
				<td>{{$lat}}</td>
			</tr>
			<tr>
				<td>Longitude</td>
				<td>{{$long}}</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>{{$phone}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{}}</td>
			</tr>
			<tr>
				<td>Contact Person</td>
				<td>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</td>
			</tr>
			<tr>
				<td>Email Contact Person</td>
				<td>{{Auth::user()->email}}</td>
			</tr>
			<tr>
				<td>Phone Contact Person</td>
				<td>{{Auth::user()->phone}}</td>
			</tr>
			<tr>
				<td>Overview</td>
				<td>{{$overview}}</td>
			</tr>
		</tbody>
	</table>

	<a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/shoppings/' . $id . '/edit' ) }}">Edit my info</a>	


@stop