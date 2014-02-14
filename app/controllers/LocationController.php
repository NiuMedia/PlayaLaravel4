<?php

class LocationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$locations = Location::all();

    	return View::make('locations.index')
      		->with('locations', $locations);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('locations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Location::$rules);
 
   		if ($validator->passes()) {
      		$location = new Location;
   			$location->name = Input::get('name');
   			$location->save();
 
   			return Redirect::to('app/locations')->with('message', 'Succesfully added');
   		} 
   		else {
      		return Redirect::to('app/locations/create')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
   		}
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
		// get the user
		$location = Location::find($id);

		// show the edit form and pass the type
		return View::make('locations.edit')
			->with('location', $location);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Location::$rules);
 
   		if ($validator->passes()) {
      		$location = Location::find($id);
   			$location->name = Input::get('name');
   			$location->save();
 
   			return Redirect::to('app/locations')->with('message', 'Succesfully added');
   		} 
   		else {
      		return Redirect::to('app/locations/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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
		$location = Location::find($id);
		$location->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the location!');
		return Redirect::to('app/locations');
	}

}