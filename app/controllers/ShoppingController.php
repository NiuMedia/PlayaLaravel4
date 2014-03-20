<?php

class ShoppingController extends \BaseController {

	public function __construct() {
      	$this->beforeFilter('csrf', array('on'=>'post'));
      	$this->beforeFilter('auth', array('only'=>array('index', 'create', 'show', 'edit', 'destroy')));
  	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('shoppings.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the beach
		$shopping = Shopping::find($id);

		// show the edit form and pass the beach
		return View::make('shoppings.edit')
			->with('shopping', $shopping);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Shopping::$rules);

		if ($validator->passes()) {
      		$shopping = Shopping::find($id);
   			$shopping->name = Input::get('name');
   			$shopping->address = Input::get('address');
   			$shopping->lat = Input::get('lat');
   			$shopping->long = Input::get('long');
   			$shopping->phone = Input::get('phone');
   			$shopping->overview = Input::get('overview');
   			//faltan fotos
   			//faltan horarios
   			$shopping->save();
 
   			return Redirect::to('app/shoppings')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/shoppings/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
   		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}