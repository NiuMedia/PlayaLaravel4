@extends('layouts.masterview')

@section('title')
  @parent
     :: Types
@stop

@section('content')
	<div class="row title-header">
		<div class="col-md-3">
			<h1>Types</h1>
		</div>
		<div class="col-md-3">
			<p class="title-p"><a class="btn btn-small btn-success" href="{{ URL::to('app/types/create') }}">Create New Type</a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title to-left">Hotel</h3>
					{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn1', 'class' => 'ocbtn') ) }}
					{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn1', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
				</div>
				<table class="table table-hover" id="cont1" style="display:none">
					<thead>
						<tr>
							<th>Name</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($types as $type)
						@if($type->category=='hotel')
							<tr>
								<td>{{$type->name}}</td>
								<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/types/' . $type->id . '/edit' ) }}">Edit</a></td>
								<td>
									{{ Form::open(array('url' => 'app/types/' . $type->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
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
		</div>
		<div class="col-md-6">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title to-left">Restaurant</h3>
					{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn2', 'class' => 'ocbtn') ) }}
					{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn2', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
				</div>
				<table class="table table-hover" id="cont2" style="display:none">
					<thead>
						<tr>
							<th>Name</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($types as $type)
						@if($type->category=='restaurant')
							<tr>
								<td>{{$type->name}}</td>
								<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/types/' . $type->id . '/edit' ) }}">Edit</a></td>
								<td>
									{{ Form::open(array('url' => 'app/types/' . $type->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
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
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title to-left">Nightlife</h3>
					{{ HTML::image('img/br_down.png', $alt = 'open', $attributes = array('id'=>'obtn3', 'class' => 'ocbtn') ) }}
					{{ HTML::image('img/br_up.png', $alt = 'close', $attributes = array('id'=>'cbtn3', 'class' => 'ocbtn', 'style'=>'display:none') ) }}
				</div>
				<table class="table table-hover" id="cont3" style="display:none">
					<thead>
						<tr>
							<th>Name</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($types as $type)
						@if($type->category=='nightlife')
							<tr>
								<td>{{$type->name}}</td>
								<td><a class="btn btn-small btn-info" style="width:100%;" href="{{ URL::to('app/types/' . $type->id . '/edit' ) }}">Edit</a></td>
								<td>
									{{ Form::open(array('url' => 'app/types/' . $type->id, 'class' => 'pull-right' , 'style'=>'width:100%;')) }}
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
		</div>
	</div>

	<script>
	$(document).ready(function(){
		function abrirSeccion(sec){
	      document.getElementById("cont"+sec+"").style.display="table";
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

@stop