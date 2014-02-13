@extends('layouts.masterdashadmin')

@section('title')
@parent
:: Dashboard
@stop

@section('content')

	<h1>Admin Dashboard</h1>
	 
	<p>Welcome to your Dashboard {{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">ADMINISTRATORS</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn1', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn1', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
		<table class="table table-hover" id="cont1" style="display:none">
			<thead>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Status</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
				@if($user->rol=='admin')
				<tr>
					<td>{{$user->firstname}} {{$user->lastname}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->status}}</td>
					<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
				@endif
			@endforeach
			</tbody>
		</table>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">HOTELS</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn2', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn2', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
		<table class="table table-hover" id="cont2" style="display:none">
			<thead>
				<tr>
					<th>Name</th>
					<th>User name</th>
					<th>Status</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					@if($user->rol=='hotel')
					<tr>
						<td>{{$user->firstname}} {{$user->lastname}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->status}}</td>
						<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
						<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
						<td>
							{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
							{{ Form::close() }}
						</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">RESTAURANTS</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn3', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn3', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
	<table class="table table-hover" id="cont3" style="display:none">
		<thead>
			<tr>
				<th>Name</th>
				<th>User name</th>
				<th>Status</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				@if($user->rol=='restaurant')
				<tr>
					<td>{{$user->firstname}} {{$user->lastname}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->status}}</td>
					<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>
<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">NIGHTLIFE</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn4', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn4', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
	<table class="table table-hover" id="cont4" style="display:none">
		<thead>
			<tr>
				<th>Name</th>
				<th>User name</th>
				<th>Status</th>
				<th>Location</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				@if($user->rol=='nightlife')
				<tr>
					<td>{{$user->firstname}} {{$user->lastname}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->status}}</td>
					<td>{{$user->id_location}}</td>
					<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">BEACHES</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn5', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn5', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
	<table class="table table-hover" id="cont5" style="display:none">
		<thead>
			<tr>
				<th>Name</th>
				<th>User name</th>
				<th>Status</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				@if($user->rol=='beach')
				<tr>
					<td>{{$user->firstname}} {{$user->lastname}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->status}}</td>
					<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">TOURS</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn6', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn6', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
	<table class="table table-hover" id="cont6" style="display:none">
		<thead>
			<tr>
				<th>Name</th>
				<th>User name</th>
				<th>Status</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				@if($user->rol=='tour')
				<tr>
					<td>{{$user->firstname}} {{$user->lastname}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->status}}</td>
					<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
					<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
					<td>
						{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
						{{ Form::close() }}
					</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">EVENTS</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn7', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn7', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
		<table class="table table-hover" id="cont7" style="display:none">
			<thead>
				<tr>
					<th>Name</th>
					<th>User name</th>
					<th>Status</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					@if($user->rol=='event')
					<tr>
						<td>{{$user->firstname}} {{$user->lastname}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->status}}</td>
						<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
						<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
						<td>
							{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
							{{ Form::close() }}
						</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">SHOPPING</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn8', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn8', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
		<table class="table table-hover" id="cont8" style="display:none">
			<thead>
				<tr>
					<th>Name</th>
					<th>User name</th>
					<th>Status</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					@if($user->rol=='shopping')
					<tr>
						<td>{{$user->firstname}} {{$user->lastname}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->status}}</td>
						<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
						<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
						<td>
							{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
							{{ Form::close() }}
						</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">TRANSPORTATION</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn9', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn9', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
		<table class="table table-hover" id="cont9" style="display:none">
			<thead>
				<tr>
					<th>Name</th>
					<th>User name</th>
					<th>Status</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					@if($user->rol=='transportation')
					<tr>
						<td>{{$user->firstname}} {{$user->lastname}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->status}}</td>
						<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
						<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
						<td>
							{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
							{{ Form::close() }}
						</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title to-left">DOCTORS</h3>
			{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn10', 'class' => 'ocbtn') ) }}
			{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn10', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
		</div>
		<table class="table table-hover" id="cont10" style="display:none">
			<thead>
				<tr>
					<th>Name</th>
					<th>User name</th>
					<th>Status</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					@if($user->rol=='doctor')
					<tr>
						<td>{{$user->firstname}} {{$user->lastname}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->status}}</td>
						<td><a class="btn btn-small btn-success" style="width:100%;" href="{{ URL::to('app/users/' . $user->id ) }}">View</a></td>
						<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/users/' . $user->id . '/edit' ) }}">Edit</a></td>
						<td>
							{{ Form::open(array('url' => 'app/users/' . $user->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'style'=>'width:100%;')) }}
							{{ Form::close() }}
						</td>
					</tr>
					@endif
				@endforeach
			</tbody>
		</table>
	</div>
	<script>
	$(document).ready(function(){
		function abrirSeccion(sec){
	      document.getElementById("cont"+sec+"").style.display="block";
	      document.getElementById("obtn"+sec+"").style.display="none";
	      document.getElementById("cbtn"+sec+"").style.display="block";
	     }
	    function cerrarSeccion(sec){
	      document.getElementById("cont"+sec+"").style.display="none";
	      document.getElementById("obtn"+sec+"").style.display="block";
	      document.getElementById("cbtn"+sec+"").style.display="none";
	    }
	    $(".ocbtn").on("click", function(event){
          switch($(event.target).attr("id")){
            case "obtn1":
              abrirSeccion(1);
            break;
            case "obtn2":
              abrirSeccion(2);
            break;
            case "obtn3":
              abrirSeccion(3);
            break;
            case "obtn4":
              abrirSeccion(4);
            break;
            case "obtn5":
              abrirSeccion(5);
            break;
            case "obtn6":
              abrirSeccion(6);
            break;
            case "obtn7":
              abrirSeccion(7);
            break;
            case "obtn8":
              abrirSeccion(8);
            break;
            case "obtn9":
              abrirSeccion(9);
            break;
            case "obtn10":
              abrirSeccion(10);
            break;
            case "cbtn1":
              cerrarSeccion(1);
            break;
            case "cbtn2":
              cerrarSeccion(2);
            break;
            case "cbtn3":
              cerrarSeccion(3);
            break;
            case "cbtn4":
              cerrarSeccion(4);
            break;
            case "cbtn5":
              cerrarSeccion(5);
            break;
            case "cbtn6":
              cerrarSeccion(6);
            break;
            case "cbtn7":
              cerrarSeccion(7);
            break;
            case "cbtn8":
              cerrarSeccion(8);
            break;
            case "cbtn9":
              cerrarSeccion(9);
            break;
            case "cbtn10":
              cerrarSeccion(10);
            break;
          }
        });
	});
	</script>
		<!-- @foreach($users as $user)
			<td>
				<tr>{{$user->firstname}}</tr>
				<tr> {{$user->rol}}</tr>
			</td>
		@endforeach
	</table> -->
@stop