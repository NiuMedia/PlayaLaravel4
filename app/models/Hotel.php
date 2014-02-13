<?php

	class Hotel extends Eloquent{
		protected $fillable = array('id_user', 'name', 'street', 'overview', 'long', 'lat', 'phone', 'pricelow', 'pricehigh', 'priceavg', 'stars', 'id_type');
		
		public static $rules = array(
	   		'name'=>'required',
	   		'address'=>'required',
	   		'overview'=>'required',
	   		'id_type'=>'required'
	   	);
	}

?>