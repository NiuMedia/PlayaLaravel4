<?php

class TypeController extends \BaseController {

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
		$types = Type::all();

    	return View::make('types.index')
      		->with('types', $types);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Type::$rules);
 
   		if ($validator->passes()) {
      		$type = new Type;
   			$type->name = Input::get('name');
   			$type->category = Input::get('category');
   			$type->save();
 
   			return Redirect::to('app/types')->with('message', 'Succesfully added');
   		} 
   		else {
      		return Redirect::to('app/types/create')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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
		// get the type
		$type = Type::find($id);

		// show the edit form and pass the type
		return View::make('types.edit')
			->with('type', $type);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Type::$rules);
 
   		if ($validator->passes()) {
      		$type = Type::find($id);
   			$type->name = Input::get('name');
   			$type->category = Input::get('category');
   			$type->save();
 
   			return Redirect::to('app/types')->with('message', 'Succesfully edited');
   		} 
   		else {
      		return Redirect::to('app/types/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
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
		$type = Type::find($id);
		$type->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the type!');
		return Redirect::to('app/types');
	}

}