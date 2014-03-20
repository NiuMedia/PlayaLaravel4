<?php

class RestaurantController extends \BaseController {

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
		return View::make('restaurants.index');
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
		$restaurant = Restaurant::find($id);

		// show the edit form and pass the beach
		return View::make('restaurants.edit')
			->with('restaurant', $restaurant);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Restaurant::$rules);

		if ($validator->passes()) {
      		$restaurant = Restaurant::find($id);
   			$restaurant->name = Input::get('name');
   			$restaurant->address = Input::get('address');
   			$restaurant->lat = Input::get('lat');
   			$restaurant->long = Input::get('long');
   			$restaurant->phone = Input::get('phone');
   			$restaurant->priceavg = Input::get('priceavg');
   			$restaurant->stars = Input::get('stars');
   			$restaurant->overview = Input::get('overview');
   			//faltan fotos
   			//faltan horarios
   			$restaurant->save();
 
   			return Redirect::to('app/restaurants')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/restaurants/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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