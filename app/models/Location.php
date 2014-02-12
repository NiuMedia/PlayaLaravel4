<?php

	class Location extends Eloquent{
		protected $fillable = array('name');

		public static $rules = array(
	   		'name'=>'required',
   		);
	}

?>