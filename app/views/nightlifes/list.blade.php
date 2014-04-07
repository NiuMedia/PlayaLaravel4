@extends('layouts.masterdashadmin')

   @section('title')
      @parent
         :: Nightlifes
   @stop
   
   @section('content')
   <h1>Nightlifes </h1>
   		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Status</th>
					<th>Location</th>
					<th>Phone</th>
					<th>Email</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
				@if($user->rol=='nightlife' && $user->idlocation==Auth::user()->idlocation)
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
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				@endif
			@endforeach
			</tbody>
		</table>

   @stop