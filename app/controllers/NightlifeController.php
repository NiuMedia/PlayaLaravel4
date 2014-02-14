<?php

class NightlifeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('nightlifes.index');
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
		$nightlife = Nightlife::find($id);
		$type_options = DB::table('types')->where('category', 'nightlife')->orderBy('name', 'asc')->lists('name','id');
		// show the edit form and pass the type
		return View::make('nightlifes.edit', array('nightlife' => $nightlife, 'type_options' => $type_options));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Nightlife::$rules);

		if ($validator->passes()) {
      		$hotel = Hotel::find($id);
   			$hotel->name = Input::get('name');
   			$hotel->address = Input::get('address');
   			$hotel->lat = Input::get('lat');
   			$hotel->long = Input::get('long');
   			$hotel->phone = Input::get('phone');
   			$hotel->overview = Input::get('overview');
   			//faltan fotos
   			//faltan horarios
   			$hotel->save();
 
   			return Redirect::to('app/nightlifes')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/nightlifes/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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