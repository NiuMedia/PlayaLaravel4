<?php

	class Service extends Eloquent{
		protected $fillable = array('name', 'category', 'facilityType', 'logo');

		public static $rules = array(
	   		'name'=>'required',
	   		'category'=>'required',
	   		'facilityType'=>'required'
   		);
	}

?>