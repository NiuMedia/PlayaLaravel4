<?php

class EventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('events.index');
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
		$event = Event::find($id);
		//$type_options = DB::table('types')->where('category', 'event')->orderBy('name', 'asc')->lists('name','id');
		// show the edit form and pass the type
		return View::make('events.edit', array('event' => $event/*, 'type_options' => $type_options)*/));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Event::$rules);

		if ($validator->passes()) {
      		$event = Event::find($id);
   			$event = Beach::find($id);
   			$event->name = Input::get('name');
   			$event->address = Input::get('address');
   			$event->lat = Input::get('lat');
   			$event->long = Input::get('long');
   			$event->phone = Input::get('phone');
   			$event->overview = Input::get('overview');
   			//faltan fotos
   			//faltan horarios
   			$event->save();
 
   			return Redirect::to('app/events')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/events/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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