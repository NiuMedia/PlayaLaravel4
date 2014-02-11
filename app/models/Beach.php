<?php

	class Beach extends Eloquent{
		protected $fillable = array('id_user', 'name', 'address', 'overview', 'long', 'lat');
		
		public static $rules = array(
	   		'name'=>'required',
	   		'address'=>'required',
	   		'overview'=>'required'
	   	);
	}

?>