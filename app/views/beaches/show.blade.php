@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Dashboard
@stop

@section('content')

<h1>Hello world</h1>

{{Auth::user()->id}}
@stop