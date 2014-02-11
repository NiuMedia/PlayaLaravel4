@extends('layouts.masterdashuser')

@section('title')
  @parent
     :: Dashboard
@stop

@section('content')

<h1>Beach Dashboard</h1>

<p>Welcome {{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>

<?php $beach = Beach::where('id_user', '=', Auth::user()->id)->pluck('name'); ?>

    {{$beach}}


@stop