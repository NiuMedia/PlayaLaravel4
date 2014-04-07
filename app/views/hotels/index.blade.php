@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Dashboard Hotel
@stop

@section('content')

	<h1>Welcome {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h1>

	<?php
		$id = Hotel::where('iduser', '=', Auth::user()->id)->pluck('id');
		$idtype = Hotel::where('iduser', '=', Auth::user()->id)->pluck('idtype');
		$name = Hotel::where('iduser', '=', Auth::user()->id)->pluck('name'); 
		$address = Hotel::where('iduser', '=', Auth::user()->id)->pluck('address');
		$lat = Hotel::where('iduser', '=', Auth::user()->id)->pluck('lat');
		$long = Hotel::where('iduser', '=', Auth::user()->id)->pluck('long');
		$phone = Hotel::where('iduser', '=', Auth::user()->id)->pluck('phone');
		$pricelow = Hotel::where('iduser', '=', Auth::user()->id)->pluck('pls');
		$pricehigh = Hotel::where('iduser', '=', Auth::user()->id)->pluck('phs');
		$priceavg = Hotel::where('iduser', '=', Auth::user()->id)->pluck('avgp');
		$stars = Hotel::where('iduser', '=', Auth::user()->id)->pluck('stars');
		$email = Hotel::where('iduser', '=', Auth::user()->id)->pluck('email');
		$overview = Hotel::where('iduser', '=', Auth::user()->id)->pluck('overview');
		$photo1 = Hotel::where('iduser', '=', Auth::user()->id)->pluck('photo1');
		$photo2 = Hotel::where('iduser', '=', Auth::user()->id)->pluck('photo2');
		$photo3 = Hotel::where('iduser', '=', Auth::user()->id)->pluck('photo3');
		$photo4 = Hotel::where('iduser', '=', Auth::user()->id)->pluck('photo4');
		$photo5 = Hotel::where('iduser', '=', Auth::user()->id)->pluck('photo5');
		$photo6 = Hotel::where('iduser', '=', Auth::user()->id)->pluck('photo6');
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
				<td>{{$idtype}}</td>
			</tr>
			<tr>
				<td>Hotel name</td>
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
				<td></td>
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
				<td>Price low season</td>
				<td>{{$pricelow}}</td>
			</tr>
			<tr>
				<td>Price high season</td>
				<td>{{$pricehigh}}</td>
			</tr>
			<tr>
				<td>Average Price</td>
				<td>{{$priceavg}}</td>
			</tr>
			<tr>
				<td>Stars</td>
				<td>{{$stars}}</td>
			</tr>
			<tr>
				<td>Overview</td>
				<td>{{$overview}}</td>
			</tr>
		</tbody>
	</table>

	<a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/hotels/' . $id . '/edit' ) }}">Edit my info</a>	


@stop