<?php

class HotelController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('hotels.index');
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
		// get the user
		$hotel = Hotel::find($id);
		$type_options = DB::table('types')->where('category', 'hotel')->orderBy('name', 'asc')->lists('name','id');
		// show the edit form and pass the type
		return View::make('hotels.edit', array('hotel' => $hotel, 'type_options' => $type_options));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Hotel::$rules);

		if ($validator->passes()) {
      		$hotel = Hotel::find($id);
   			$hotel->name = Input::get('name');
   			$hotel->street = Input::get('address');
   			$hotel->overview = Input::get('overview');
   			$hotel->id_type = Input::get('id_type');
   			$hotel->save();
 
   			return Redirect::to('app/hotels')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/hotels/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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