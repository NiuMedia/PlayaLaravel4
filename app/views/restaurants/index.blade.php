@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Dashboard
@stop

@section('content')

	<h1>Restaurant Dashboard</h1>

	<p>Welcome {{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>

	<?php
		$id = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('id');
		$id_type = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('id_type');
		$name = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('name'); 
		$address = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('address');
		$lat = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('lat');
		$long = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('long');
		$phone = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('phone');
		$priceavg = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('priceavg');
		$overview = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('overview');
		$photo1 = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('photo1');
		$photo2 = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('photo2');
		$photo3 = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('photo3');
		$photo4 = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('photo4');
		$photo5 = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('photo5');
		$photo6 = Restaurant::where('id_user', '=', Auth::user()->id)->pluck('photo6');
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
				<td>Restaurant name</td>
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
				<td>Average Price</td>
				<td>{{$priceavg}}</td>
			</tr>
			<tr>
				<td>Overview</td>
				<td>{{$overview}}</td>
			</tr>
		</tbody>
	</table>

	<a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/restaurants/' . $id . '/edit' ) }}">Edit my info</a>	


@stop