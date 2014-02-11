<?php

	class Type extends Eloquent{
		protected $fillable = array('name', 'category');

		public static $rules = array(
	   		'name'=>'required',
	   		'category'=>'required',
   		);
	}

?>