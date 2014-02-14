<?php

class TourController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('tours.index');
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
		$tour = Tour::find($id);

		// show the edit form and pass the beach
		return View::make('tours.edit')
			->with('tour', $tour);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Tour::$rules);

		if ($validator->passes()) {
      		$tour = Tour::find($id);
   			$tour->name = Input::get('name');
   			$tour->address = Input::get('address');
   			$tour->lat = Input::get('lat');
   			$tour->long = Input::get('long');
   			$tour->phone = Input::get('phone');
   			$tour->overview = Input::get('overview');
   			//faltan fotos
   			//faltan horarios
   			$tour->save();
 
   			return Redirect::to('app/tours')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/tours/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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