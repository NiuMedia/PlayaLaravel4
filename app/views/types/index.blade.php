@extends('layouts.masterview')

@section('title')
  @parent
     :: Types
@stop

@section('content')
	<div class="row">
		<div class="col-md-3">
			<h1>Types</h1>
		</div>
		<div class="col-md-3">
			<a class="btn btn-small btn-success" href="{{ URL::to('app/types/create') }}">Create New Type</a>
		</div>
	</div>
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Category</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($types as $type)
				<tr>
					<td>{{$type->name}}</td>
					<td>{{$type->category}}</td>
					<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/types/' . $type->id ) }}">View</a></td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/types/' . $type->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/types/' . $type->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@stop