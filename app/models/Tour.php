<?php

	class Tour extends Eloquent{
		protected $fillable = array('id_user', 'name', 'street', 'overview', 'long', 'lat', 'phone', 'id_type', 'photo1', 'photo2' , 'photo3', 'photo4', 'photo5');
		
		public static $rules = array(
	   		'name'=>'required',
	   		'address'=>'required',
	   		'overview'=>'required',
	   		'id_type'=>'required'
	   	);
	}

?>