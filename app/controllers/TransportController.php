<?php

class TransportController extends \BaseController {

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
		return View::make('transports.index');
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
		$transport = Transport::find($id);

		// show the edit form and pass the beach
		return View::make('transports.edit')
			->with('transport', $transport);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Transport::$rules);

		if ($validator->passes()) {
      		$transport = Transport::find($id);
   			$transport->name = Input::get('name');
   			$transport->address = Input::get('address');
   			$transport->lat = Input::get('lat');
   			$transport->long = Input::get('long');
   			$transport->phone = Input::get('phone');
   			$transport->cellphone = Input::get('cellphone');
   			$transport->email = Input::get('email');
   			$transport->overview = Input::get('overview');
   			//faltan fotos
   			$transport->save();
 
   			return Redirect::to('app/transports')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/transports/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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