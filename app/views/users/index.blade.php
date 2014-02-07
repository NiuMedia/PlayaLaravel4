@extends('layouts.masterdashadmin')

@section('title')
@parent
:: Dashboard
@stop

@section('content')

	<h1>Dashboard Admin</h1>
	 
	<p>Welcome to your Dashboard Admin. You rock!</p>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>User name</th>
				<th>Type</th>
				<th>Status</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->firstname}} {{$user->lastname}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->rol}}</td>
					<td>{{$user->status}}</td>
					<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('users/view/' . $user->id ) }}">View</a></td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('users/edit/' . $user->id ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'users/admin/' . $user->id, 'class' => 'pull-right')) }}

							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
		<!-- @foreach($users as $user)
			<td>
				<tr>{{$user->firstname}}</tr>
				<tr> {{$user->rol}}</tr>
			</td>
		@endforeach
	</table> -->
@stop