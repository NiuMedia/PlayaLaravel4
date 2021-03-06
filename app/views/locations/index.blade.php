@extends('layouts.masterdashadmin')

@section('title')
  @parent
     :: Locations
@stop

@section('content')
	<div class="row title-header">
		<div class="col-md-3">
			<h1>Locations</h1>
		</div>
		<div class="col-md-3">
			<p class="title-p"><a class="btn btn-small btn-success" href="{{ URL::to('app/locations/create') }}">Create New Location</a></p>
		</div>
	</div>
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($locations as $location)
				<tr>
					<td>{{$location->name}}</td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/locations/' . $location->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/locations/' . $location->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop