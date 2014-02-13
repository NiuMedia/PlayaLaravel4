@extends('layouts.masterview')

@section('title')
  @parent
     :: Services
@stop

@section('content')
	<div class="row">
		<div class="col-md-3">
			<h1>Services</h1>
		</div>
		<div class="col-md-3">
			<a class="btn btn-small btn-success" href="{{ URL::to('app/services/create') }}">Create New Service</a>
		</div>
	</div>
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Category</th>
				<th>Facility Type</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($services as $service)
				<tr>
					<td>{{$service->name}}</td>
					<td>{{$service->category}}</td>
					@if($service->facilityType == 1)
						<?php $facilityType = 'Hotel Facilities Dining and Entertainment Facilities'; ?>
					@elseif($service->facilityType == 2)
						<?php $facilityType =  'Leisure and  recreational facilities'; ?>
					@elseif($service->facilityType == 3)
						<?php $facilityType =  'Business Facilities';?>
					@elseif($service->facilityType == 4)
						<?php $facilityType =  'Family Facilities';?>
					@elseif($service->facilityType == 5)
						<?php $facilityType =  'Handicapped / Disabled Facilities';?>
					@elseif($service->facilityType == 6)
						<?php $facilityType =  'General Facilities';?>
					@endif
					<td>{{$facilityType}}</td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/services/' . $service->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/services/' . $service->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop