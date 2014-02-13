<?php

	class Service extends Eloquent{
		protected $fillable = array('name', 'category', 'idtype');

		public static $rules = array(
	   		'name'=>'required',
	   		'category'=>'required',
	   		'facilityType'=>'required'
   		);
	}

?>