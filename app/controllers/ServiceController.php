<?php

class ServiceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$services = Service::all();

    	return View::make('services.index')
      		->with('services', $services);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('services.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Service::$rules);
 
   		if ($validator->passes()) {
      		$service = new Service;
   			$service->name = Input::get('name');
   			$service->category = Input::get('category');
   			$service->facilityType = Input::get('facilityType');
   			//falta logo
   			$service->save();
 
   			return Redirect::to('app/services')->with('message', 'Succesfully added');
   		} 
   		else {
      		return Redirect::to('app/services/create')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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
		// get the service
		$service = Service::find($id);

		// show the edit form and pass the service
		return View::make('services.edit')
			->with('service', $service);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Service::$rules);
 
   		if ($validator->passes()) {
      		$service = Service::find($id);
   			$service->name = Input::get('name');
   			$service->category = Input::get('category');
   			$service->facilityType = Input::get('facilityType');
   			//falta logo
   			$service->save();
 
   			return Redirect::to('app/services')->with('message', 'Succesfully edited');
   		} 
   		else {
      		return Redirect::to('app/services/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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
		$service = Service::find($id);
		$service->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the service!');
		return Redirect::to('app/services');
	}

}