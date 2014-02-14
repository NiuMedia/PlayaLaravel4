<?php

	class Hotel extends Eloquent{
		protected $fillable = array('id_user', 'name', 'address', 'overview', 'long', 'lat', 'phone', 'pricelow', 'pricehigh', 'priceavg', 'stars', 'id_type', 'photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'photo6');
		
		public static $rules = array(
	   		'name'=>'required',
	   		'address'=>'required',
	   		'id_type'=>'required'
	   	);
	}

?>