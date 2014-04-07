@extends('layouts.masterdashadmin')

   @section('title')
      @parent
         :: Administrators
   @stop
   
   @section('content')
   <h1>Administrators </h1>
   		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Status</th>
					<th>Location</th>
					<th>Phone</th>
					<th>Email</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
				@if($user->rol=='admin' && $user->idlocation==Auth::user()->idlocation)
				<tr>
					<td>{{$user->firstname}} {{$user->lastname}}</td>
					<td>{{$user->status}}</td>
					<?php 
						if($user->idlocation != 0){
							$location = DB::table('locations')->where('id', $user->idlocation)->pluck('name'); 
						}
						else
							$location = '';
					?>
					<td>{{$location}}</td>
					<td>{{$user->phone}}</td>
					<td>{{$user->email}}</td>
					<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
				@endif
			@endforeach
			</tbody>
		</table>

   @stop