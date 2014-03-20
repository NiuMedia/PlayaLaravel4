<?php

	class Beach extends Eloquent{
		protected $fillable = array('id_user', 'name', 'address', 'overview', 'long', 'lat', 'photo1', 'photo2' , 'photo3', 'photo4', 'photo5', 'id_type');
		
		public static $rules = array(
	   		'name'=>'required',
	   		'address'=>'required'
	   	);
	}

?>