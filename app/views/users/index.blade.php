@extends('layouts.masterdashadmin')

@section('title')
@parent
:: Dashboard
@stop

@section('content')
@if(Auth::user()->rol =='admin')
	<div class="row title-header">
		<div class="col-md-9">
			<h1>Welcome {{Auth::user()->firstname}} {{Auth::user()->lastname}}</h1>
		</div>
	</div>
	
	<table class="table table-bordered">
  		<tr>
  			<td id="info">
  				<h3>Hotels</h3>
  				<p>Active:
  						<?php $hotelsactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','hotel')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
  						{{$hotelsactive}}
  				</p>
  				<p>Inactive:
            <?php $hotelsinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','hotel')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$hotelsinactive}}
  				</p>
  				<p>Total:
            <?php $hotelstotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','hotel')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$hotelstotal}}
  				</p>
  			</td>
  			<td id="info">
  				<h3>Restaurants</h3>
  				<p>Active:
              <?php $restaurantsactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','restaurant')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$restaurantsactive}}
          </p>
          <p>Inactive:
            <?php $restaurantsinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','restaurant')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$restaurantsinactive}}
          </p>
          <p>Total:
            <?php $restaurantstotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','restaurant')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$restaurantstotal}}
          </p>
  			</td> 
  			<td id="info">
  				<h3>Nightlifes</h3>
  				<p>Active:
              <?php $nighlifesactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','nighlife')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$nighlifesactive}}
          </p>
          <p>Inactive:
            <?php $nighlifesinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','nighlife')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$nighlifesinactive}}
          </p>
          <p>Total:
            <?php $nighlifestotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','nighlife')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$nighlifestotal}}
          </p>
  			</td>
		</tr>
		<tr>
  			<td id="info">
  				<h3>Shoppings</h3>
  				<p>Active:
              <?php $shoppingsactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','shopping')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$shoppingsactive}}
          </p>
          <p>Inactive:
            <?php $shoppingsinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','shopping')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$shoppingsinactive}}
          </p>
          <p>Total:
            <?php $shoppingstotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','shopping')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$shoppingstotal}}
          </p>
  			</td>
  			<td id="info">
  				<h3>Tours</h3>
  				<p>Active:
              <?php $toursactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','tour')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$toursactive}}
          </p>
          <p>Inactive:
            <?php $toursinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','tour')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$toursinactive}}
          </p>
          <p>Total:
            <?php $tourstotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','tour')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$tourstotal}}
          </p>
  			</td> 
  			<td id="info">
  				<h3>Beaches</h3>
  				<p>Active:
              <?php $beachesactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','beach')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$beachesactive}}
          </p>
          <p>Inactive:
            <?php $beachesinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','beach')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$beachesinactive}}
          </p>
          <p>Total:
            <?php $beachestotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','beach')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$beachestotal}}
          </p>
  			</td>
		</tr>
		<tr>
  			<td id="info">
  				<h3>Events</h3>
  				<p>Active:
              <?php $eventsactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','event')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$eventsactive}}
          </p>
          <p>Inactive:
            <?php $eventsinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','event')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$eventsinactive}}
          </p>
          <p>Total:
            <?php $eventstotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','event')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$eventstotal}}
          </p>
  			</td>
  			<td id="info">
  				<h3>Transports</h3>
  				<p>Active:
              <?php $transportationsactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','transportation')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$transportationsactive}}
          </p>
          <p>Inactive:
            <?php $transportationsinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','transportation')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$transportationsinactive}}
          </p>
          <p>Total:
            <?php $transportationstotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','transportation')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$transportationstotal}}
          </p>
  			</td> 
  			<td id="info">
  				<h3>Doctors</h3>
  				<p>Active:
              <?php $doctorsactive = DB::table('users')->where(function($query){
                  $query->where('status','=','active')
                  ->where('rol','=','doctor')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$doctorsactive}}
          </p>
          <p>Inactive:
            <?php $doctorsinactive = DB::table('users')->where(function($query){
                  $query->where('status','=','inactive')
                  ->where('rol','=','doctor')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$doctorsinactive}}
          </p>
          <p>Total:
            <?php $doctorstotal = DB::table('users')->where(function($query){
                  $query->where('rol','=','doctor')
                  ->where('idlocation','=', Auth::user()->idlocation);
                })->count(); ?>
              {{$doctorstotal}}
          </p>
  			</td>
		</tr>
	</table>
		<!-- @foreach($users as $user)
			<td>
				<tr>{{$user->firstname}}</tr>
				<tr> {{$user->rol}}</tr>
			</td>
		@endforeach
	</table> -->
	@endif
@stop