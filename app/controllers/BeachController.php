<?php

class BeachController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('beaches.index');
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
		$beach = Beach::find($id);

		// show the edit form and pass the type
		return View::make('beaches.edit')
			->with('beach', $beach);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Beach::$rules);

		if ($validator->passes()) {
      		$beach = Beach::find($id);
   			$beach->name = Input::get('name');
   			$beach->address = Input::get('address');
   			$beach->overview = Input::get('overview');
   			$beach->save();
 
   			return Redirect::to('app/beaches')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/beaches/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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